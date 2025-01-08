<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $settings = Setting::where('is_active', 1)->select('key', 'value', 'title')->get()
            ->keyBy('key')->map(function($item) {
                return [
                    'value' => $item->value,
                    'title' => $item->title
                ];
            })->toArray();
        View::share('settings', $settings);
    }
}
