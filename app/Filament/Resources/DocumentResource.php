<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentResource\Pages;
use Domain\Client\Models\Client;
use Domain\Document\Models\Document;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $recordTitleAttribute = 'name';

    #[\Override]
    public static function getNavigationGroup(): ?string
    {
        return trans('Workspace');
    }

    #[\Override]
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Document Details')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->translateLabel()
                            ->required()
                            ->string()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Forms\Components\RichEditor::make('description')
                            ->translateLabel()
                            ->nullable()
                            ->string()
                            ->columnSpanFull(),
                        Forms\Components\SpatieMediaLibraryFileUpload::make('file')
                            ->translateLabel()
                            ->required()
                            ->collection('file')
                            ->maxSize(1000)
                            ->disk(config('media-library.disk_name'))
                            ->columnSpanFull(),
                        Forms\Components\DateTimePicker::make('date')
                            ->translateLabel()
                            ->required()
                            ->native(false)
                            ->hoursStep(2)
                            ->minutesStep(15)
                            ->seconds(false),
                        Forms\Components\Select::make('client_id')
                            ->translateLabel()
                            ->required()
                            ->relationship('client', 'name')
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->translateLabel()
                                    ->required()
                                    ->string()
                                    ->maxLength(255),
                            ]),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                    ]),
            ]);
    }

    #[\Override]
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('client.name')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->translateLabel()
                    ->sortable()
                    ->since()
                    ->tooltip(fn (Document $record): string => $record->date),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('client_id')
                    ->label(trans('Client'))
                    ->searchable()
                    ->options(fn (): array => Client::query()->pluck('name', 'id')->all()),
            ])
            ->actions([
                Tables\Actions\Action::make('download')
                    ->translateLabel()
                    ->url(fn (Document $record) => $record->getFirstMediaUrl('file'))
                    ->openUrlInNewTab()
                    ->icon('heroicon-o-arrow-down-tray')
                    ->color('info'),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    #[\Override]
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    #[\Override]
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }
}
