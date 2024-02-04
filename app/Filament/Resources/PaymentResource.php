<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentResource\Pages;
use Carbon\Carbon;
use Domain\Project\Actions\GetCurrencyOptionsAction;
use Domain\Transaction\Enums\PaymentType;
use Domain\Transaction\Models\Payment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PaymentResource extends Resource
{
    protected static ?string $model = Payment::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    #[\Override]
    public static function getNavigationGroup(): ?string
    {
        return trans('Accounting');
    }

    #[\Override]
    public static function form(Form $form): Form
    {
        /** @var array<string, string> */
        $currencyOptions = app(GetCurrencyOptionsAction::class)->execute();

        return $form
            ->schema([
                Forms\Components\Section::make('Payment Details')
                    ->schema([
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
                        Forms\Components\Select::make('invoice_id')
                            ->translateLabel()
                            ->required()
                            ->relationship('invoice', 'reference')
                            ->searchable()
                            ->preload(),
                        Forms\Components\TextInput::make('name')
                            ->translateLabel()
                            ->string()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('account_number')
                            ->translateLabel()
                            ->string()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('reference_number')
                            ->translateLabel()
                            ->string()
                            ->maxLength(255),
                        Forms\Components\DatePicker::make('date')
                            ->translateLabel()
                            ->required()
                            ->native(false),
                        Forms\Components\Grid::make([
                            'default' => 1,
                            'md' => 2,
                            'lg' => 3,
                        ])
                            ->schema([
                                Forms\Components\Select::make('status')
                                    ->translateLabel()
                                    ->required()
                                    ->string()
                                    ->default(PaymentType::ONLINE->value)
                                    ->options(PaymentType::class),
                                Forms\Components\Select::make('currency')
                                    ->translateLabel()
                                    ->required()
                                    ->string()
                                    ->options($currencyOptions)
                                    ->searchable()
                                    ->default(strtoupper(Table::$defaultCurrency))
                                    ->live(),
                                Forms\Components\TextInput::make('amount')
                                    ->translateLabel()
                                    ->required()
                                    ->numeric()
                                    ->prefix(fn (Forms\Get $get) => $get('currency')),
                            ]),
                        Forms\Components\RichEditor::make('notes')
                            ->translateLabel()
                            ->nullable()
                            ->string()
                            ->columnSpanFull(),
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
                Tables\Columns\TextColumn::make('client.name')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('invoice.reference')
                    ->label('Invoice Number')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->translateLabel()
                    ->sortable()
                    ->since()
                    ->tooltip(fn (Payment $record): string => $record->date->format('Y-m-d')),
                Tables\Columns\TextColumn::make('type')
                    ->translateLabel()
                    ->badge()
                    ->sortable(),
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

    #[\Override]
    public static function getRelations(): array
    {
        return [];
    }

    #[\Override]
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPayments::route('/'),
            'create' => Pages\CreatePayment::route('/create'),
            'edit' => Pages\EditPayment::route('/{record}/edit'),
        ];
    }

    #[\Override]
    public static function getNavigationBadge(): ?string
    {
        $count = Payment::whereDate('created_at', Carbon::today())->count();

        return $count > 0 ? (string) $count : '';
    }
}
