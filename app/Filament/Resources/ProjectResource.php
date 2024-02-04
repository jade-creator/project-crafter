<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use Carbon\Carbon;
use Domain\Client\Models\Client;
use Domain\Project\Actions\GetCurrencyOptionsAction;
use Domain\Project\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-light-bulb';

    protected static ?string $recordTitleAttribute = 'name';

    #[\Override]
    public static function getNavigationGroup(): ?string
    {
        return trans('Workspace');
    }

    #[\Override]
    public static function form(Form $form): Form
    {
        /** @var array<string, string> */
        $currencyOptions = app(GetCurrencyOptionsAction::class)->execute();

        return $form
            ->schema([
                Forms\Components\Section::make('Project Details')
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
                        Forms\Components\Select::make('currency')
                            ->translateLabel()
                            ->required()
                            ->string()
                            ->options($currencyOptions)
                            ->searchable()
                            ->default(strtoupper(Table::$defaultCurrency))
                            ->live(),
                        Forms\Components\TextInput::make('hourly_rate')
                            ->translateLabel()
                            ->required()
                            ->numeric()
                            ->prefix(fn (Forms\Get $get) => $get('currency')),
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
                            ])
                            ->required(),
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
                Tables\Columns\TextColumn::make('hourly_rate')
                    ->translateLabel()
                    ->formatStateUsing(
                        fn (Project $record): string => money(
                            $record->getRawOriginal('hourly_rate'),
                            $record->currency
                        )
                    ),
                Tables\Columns\TextColumn::make('client.name')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('client_id')
                    ->label(trans('Client'))
                    ->searchable()
                    ->options(fn (): array => Client::query()->pluck('name', 'id')->all()),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            RelationManagers\TaskLogsRelationManager::class,
        ];
    }

    #[\Override]
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'view' => Pages\ViewProject::route('/{record}'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }

    #[\Override]
    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\TextEntry::make('name')
                    ->translateLabel(),
                Infolists\Components\TextEntry::make('hourly_rate')
                    ->translateLabel()
                    ->formatStateUsing(
                        fn (Project $record): string => money(
                            $record->getRawOriginal('hourly_rate'),
                            $record->currency
                        )
                    ),
                Infolists\Components\TextEntry::make('description')
                    ->translateLabel()
                    ->html()
                    ->columnSpanFull(),
                Infolists\Components\TextEntry::make('client.name')
                    ->translateLabel(),
            ]);
    }

    #[\Override]
    public static function getNavigationBadge(): ?string
    {
        $count = Project::whereDate('created_at', Carbon::today())->count();

        return $count > 0 ? (string) $count : '';
    }
}
