<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvoiceResource\Pages;
use Domain\Transaction\Actions\CalculateTotalPriceAction;
use Domain\Transaction\Actions\CalculateTotalQuantityAction;
use Domain\Transaction\Actions\ExportInvoiceAsPdfAction;
use Domain\Transaction\Enums\InvoiceStatus;
use Domain\Transaction\Models\Invoice;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class InvoiceResource extends Resource
{
    protected static ?string $model = Invoice::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-arrow-up';

    #[\Override]
    public static function getNavigationGroup(): ?string
    {
        return trans('Accounting');
    }

    #[\Override]
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Invoice Details')
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                    ])
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
                        Forms\Components\Select::make('status')
                            ->translateLabel()
                            ->required()
                            ->string()
                            ->default(InvoiceStatus::DRAFT->value)
                            ->options(InvoiceStatus::class),
                    ]),
                Forms\Components\Section::make('Invoice Items')
                    ->schema([
                        Forms\Components\Repeater::make('invoiceItems')
                            ->label('')
                            ->relationship()
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->translateLabel()
                                    ->required()
                                    ->string()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('price_per_unit')
                                    ->translateLabel()
                                    ->required()
                                    ->numeric()
                                    ->inputMode('decimal')
                                    ->prefix(Str::upper(config('invoices.currency.code')))
                                    ->minValue(1),
                                Forms\Components\TextInput::make('quantity')
                                    ->translateLabel()
                                    ->required()
                                    ->numeric()
                                    ->minValue(1),
                            ])
                            ->live()
                            ->afterStateUpdated(
                                function (Forms\Set $set, ?array $state) {
                                    if (! empty($state)) {
                                        $set(
                                            'total_price',
                                            app(CalculateTotalPriceAction::class)->execute($state)
                                        );

                                        $set(
                                            'total_items',
                                            app(CalculateTotalQuantityAction::class)->execute($state)
                                        );
                                    }
                                }
                            )
                            ->columns(3),
                        Forms\Components\Section::make('')
                            ->schema([
                                Forms\Components\TextInput::make('total_price')
                                    ->translateLabel()
                                    ->readOnly()
                                    ->prefix(Str::upper(config('invoices.currency.code'))),
                                Forms\Components\TextInput::make('total_items')
                                    ->translateLabel()
                                    ->readOnly()
                                    ->formatStateUsing(
                                        fn (Forms\Get $get, ?string $state): string|float => empty($get('invoiceItems'))
                                            ? '0'
                                            : app(CalculateTotalQuantityAction::class)->execute($get('invoiceItems'))
                                    ),
                            ])
                            ->columns(2),
                    ]),
                Forms\Components\Section::make('Other Details')
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 4,
                    ])
                    ->schema([
                        Forms\Components\DatePicker::make('date')
                            ->translateLabel()
                            ->required()
                            ->native(false),
                        Forms\Components\TextInput::make('vat_rate')
                            ->translateLabel()
                            ->required()
                            ->numeric()
                            ->inputMode('decimal'),
                        Forms\Components\TextInput::make('discount_by_percent')
                            ->translateLabel()
                            ->numeric()
                            ->inputMode('decimal'),
                        Forms\Components\TextInput::make('shipping_costs')
                            ->translateLabel()
                            ->numeric()
                            ->inputMode('decimal')
                            ->prefix(Str::upper(config('invoices.currency.code'))),
                    ]),
            ]);
    }

    #[\Override]
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('reference')
                    ->label('Invoice Number')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->translateLabel()
                    ->sortable()
                    ->since()
                    ->tooltip(fn (Invoice $record): string => $record->date->format('Y-m-d')),
                Tables\Columns\TextColumn::make('client.name')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('total_price')
                    ->translateLabel()
                    ->sortable()
                    ->money(Str::upper(config('invoices.currency.code'))),
                Tables\Columns\TextColumn::make('status')
                    ->translateLabel()
                    ->badge()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('download')
                    ->translateLabel()
                    ->url(fn (Invoice $record) => app(ExportInvoiceAsPdfAction::class)->execute($record))
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
            'index' => Pages\ListInvoices::route('/'),
            'create' => Pages\CreateInvoice::route('/create'),
            'edit' => Pages\EditInvoice::route('/{record}/edit'),
        ];
    }
}
