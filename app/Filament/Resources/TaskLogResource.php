<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TaskLogResource\Pages;
use Domain\Project\Actions\GetCurrencyOptionsAction;
use Domain\Project\Models\Project;
use Domain\Project\Models\TaskLog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TaskLogResource extends Resource
{
    protected static ?string $model = TaskLog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                Forms\Components\Section::make('Task Log Details')
                    ->schema([
                        Forms\Components\TextInput::make('hours')
                            ->translateLabel()
                            ->required()
                            ->numeric(),
                        Forms\Components\Select::make('project_id')
                            ->translateLabel()
                            ->required()
                            ->relationship('project', 'name')
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->translateLabel()
                                    ->required()
                                    ->string()
                                    ->maxLength(255),
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
                            ->required(),
                        Forms\Components\RichEditor::make('description')
                            ->translateLabel()
                            ->nullable()
                            ->string()
                            ->columnSpanFull(),
                        Forms\Components\DatePicker::make('date_accomplished')
                            ->translateLabel()
                            ->required()
                            ->native(false),
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
                Tables\Columns\TextColumn::make('hours')
                    ->translateLabel()
                    ->sortable()
                    ->numeric(),
                Tables\Columns\TextColumn::make('project.name')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('project.client.name')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_accomplished')
                    ->translateLabel()
                    ->sortable()
                    ->since()
                    ->tooltip(fn (TaskLog $record): string => $record->date_accomplished->format('Y-m-d')),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('project_id')
                    ->label(trans('Project'))
                    ->searchable()
                    ->options(fn (): array => Project::query()->pluck('name', 'id')->all()),
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
            //
        ];
    }

    #[\Override]
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTaskLogs::route('/'),
            'create' => Pages\CreateTaskLog::route('/create'),
            'view' => Pages\ViewTaskLog::route('/{record}'),
            'edit' => Pages\EditTaskLog::route('/{record}/edit'),
        ];
    }

    #[\Override]
    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\TextEntry::make('hours')
                    ->translateLabel(),
                Infolists\Components\TextEntry::make('project.name')
                    ->translateLabel(),
                Infolists\Components\TextEntry::make('description')
                    ->translateLabel()
                    ->html()
                    ->columnSpanFull(),
                Infolists\Components\TextEntry::make('project.client.name')
                    ->translateLabel(),
                Infolists\Components\TextEntry::make('date_accomplished')
                    ->translateLabel()
                    ->formatStateUsing(fn (TaskLog $record): string => $record->date_accomplished->format('M. d Y')),
            ]);
    }
}
