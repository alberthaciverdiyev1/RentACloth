<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutUsResource\Pages;
use App\Filament\Resources\AboutUsResource\RelationManagers;
use App\Models\AboutUs;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Storage;


class AboutUsResource extends Resource
{
    protected static ?string $model = AboutUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('')
                    ->schema([
                        TextInput::make('w_title_1')
                            ->required()
                            ->placeholder('Title 1'),
                        TextInput::make('w_description_1')
                            ->required()
                            ->placeholder('Description 1'),
                        TextInput::make('w_icon_1')
                            ->required()
                            ->placeholder('Icon 1'),
                    ])->columnSpan(1),
                Section::make('')
                    ->schema([
                        TextInput::make('w_title_2')
                            ->required()
                            ->placeholder('Title 2'),
                        TextInput::make('w_description_2')
                            ->required()
                            ->placeholder('Description 2'),
                        TextInput::make('w_icon_2')
                            ->required()
                            ->placeholder('Icon 2'),

                    ])->columnSpan(1),
                Section::make('')
                    ->schema([
                        TextInput::make('w_title_3')
                            ->required()
                            ->placeholder('Title 3'),
                        TextInput::make('w_description_3')
                            ->required()
                            ->placeholder('Description 3'),
                        TextInput::make('w_icon_3')
                            ->required()
                            ->placeholder('Icon 3'),

                    ])->columnSpan(1),


Section::make('')->schema([
    FileUpload::make('base64_main_image')
        ->image()
        ->imageEditor()
        ->imageEditorAspectRatios([
            '16:9',
            '4:3',
            '1:1',
        ])
        ->required()
        ->disk('public')
        ->directory('images/aboutUs'),
//        ->after(function ($file) {
//                ddd($file);
//            if ($file) {
//                // Save the image to the desired location
//                $filePath = 'images/about/main_about_image.' . $file->extension();
//                // Store the image in the 'public' disk, which will save it under 'public/storage'
//                Storage::disk('public')->put($filePath, file_get_contents($file->getRealPath()));
//
//                // Optionally, you can return the path or modify the file path if needed
//                return $filePath;
//            }
//        })
])->columnSpan(1),

                RichEditor::make('main_text')->label('Main text')->required()->columnSpan(2),

            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('main_text'),
                TextColumn::make('w_title_1'),
                TextColumn::make('w_title_2'),
                TextColumn::make('w_title_3'),
                TextColumn::make('w_icon_1'),
                TextColumn::make('w_icon_2'),
                TextColumn::make('w_icon_3'),
                TextColumn::make('w_description_1'),
                TextColumn::make('w_description_2'),
                TextColumn::make('w_description_3'),

//                        'base64_main_image',
            ])->paginated(false);

    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutUs::route('/'),
            'edit' => Pages\EditAboutUs::route('/{record}/edit'),
            'create' => Pages\CreateAboutUs::route('/create'),

        ];
    }
}
