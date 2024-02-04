<?php

namespace App\Filament\Resources\ProjectResource\RelationManagers;

use Domain\Project\Actions\GetCurrencyOptionsAction;
use Domain\Project\Models\TaskLog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class TaskLogsRelationManager extends RelationManager
{
    protected static string $relationship = 'taskLogs';

    public function form(Form $form): Form
    {
        /** @var array<string, string> */
        $currencyOptions = app(GetCurrencyOptionsAction::class)->execute();

        return $form
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
                Forms\Components\DatePicker::make('date')
                    ->translateLabel()
                    ->required()
                    ->native(false),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hours')
                    ->translateLabel()
                    ->sortable()
                    ->numeric(),
                Tables\Columns\TextColumn::make('project.name')
                    ->translateLabel()
                    ->sortable(),
                Tables\Columns\TextColumn::make('project.client.name')
                    ->translateLabel()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date')
                    ->translateLabel()
                    ->sortable()
                    ->since()
                    ->tooltip(fn (TaskLog $record): string => $record->date_accomplished->format('Y-m-d')),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
