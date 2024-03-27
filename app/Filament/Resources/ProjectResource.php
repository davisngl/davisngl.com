<?php

namespace App\Filament\Resources;

use App\Enums\ProjectMetaKey;
use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-americas';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(5)
            ->schema([
                Section::make('Main Data')
                    ->columnSpan(3)
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->label('Project Name')
                            ->minLength(3)
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),

                        TextInput::make('slug')
                            ->unique('projects', ignoreRecord: true),

                        RichEditor::make('description')
                            ->columnSpanFull()
                            ->maxLength(10_000),
                    ]),

                Section::make('Meta Info')
                    ->columnSpan(2)
                    ->columns(1)
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('images')
                            ->columnSpanFull()
                            ->imageEditor()
                            ->collection('images')
                            ->visibility('public')
                            ->multiple()
                            ->reorderable(),

                        TagsInput::make('technologies')
                            ->suggestions([
                                'Laravel',
                                'TailwindCSS',
                                'AlpineJS',
                                'Livewire',
                                'InertiaJS',
                                'SocketIO',
                                'VueJS',
                            ]),

                        Repeater::make('urls')
                            ->label('URLs')
                            ->helperText('URLs for the project (repository link, demo/live link) etc.')
                            ->schema([
                                Select::make('key')->required()->options(ProjectMetaKey::cases()),
                                TextInput::make('value')->required(),
                            ])
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('Project ID'),
                Tables\Columns\TextColumn::make('name')
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('open_in_website')
                    ->link()
                    ->label('Show on website')
                    ->color('info')
                    ->icon('heroicon-m-link')
                    ->url(fn(Project $project): string => $project->url(), shouldOpenInNewTab: true),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index'  => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit'   => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
