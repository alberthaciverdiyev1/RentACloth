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
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;


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
                    FileUpload::make('image')
                        ->image()
                        ->imageEditor()
//                        ->imageEditorAspectRatios([
//                            '16:9',
//                            '4:3',
//                            '1:1',
//                        ])
                ])->columnSpan(1),
                RichEditor::make('main_text')->label('Main text')->required()->columnSpan(2),

            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAboutUs::route('/'),
            'create' => Pages\CreateAboutUs::route('/create'),
            'edit' => Pages\EditAboutUs::route('/{record}/edit'),
        ];
    }
}
