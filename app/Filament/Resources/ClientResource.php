<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Filament\Resources\ClientResource\RelationManagers;
use Carbon\Carbon;
use Domain\Client\Models\Client;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

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
                Forms\Components\Section::make('Client Details')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->translateLabel()
                            ->required()
                            ->string()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->translateLabel()
                            ->nullable()
                            ->string()
                            ->email()
                            ->unique(),
                        Forms\Components\TextInput::make('phone')
                            ->translateLabel()
                            ->nullable()
                            ->string(),
                        Forms\Components\TextInput::make('country')
                            ->translateLabel()
                            ->nullable()
                            ->string(),
                        Forms\Components\TextInput::make('street')
                            ->translateLabel()
                            ->nullable()
                            ->string(),
                        Forms\Components\TextInput::make('city')
                            ->translateLabel()
                            ->nullable()
                            ->string(),
                        Forms\Components\TextInput::make('state')
                            ->translateLabel()
                            ->nullable()
                            ->string(),
                        Forms\Components\TextInput::make('zip')
                            ->translateLabel()
                            ->nullable()
                            ->string(),
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
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->translateLabel()
                    ->searchable(),
                Tables\Columns\TextColumn::make('country')
                    ->translateLabel()
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
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
            RelationManagers\DocumentsRelationManager::class,
            RelationManagers\ProjectsRelationManager::class,
        ];
    }

    #[\Override]
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'view' => Pages\ViewClient::route('/{record}'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }

    #[\Override]
    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\TextEntry::make('name')
                    ->translateLabel(),
                Infolists\Components\TextEntry::make('email')
                    ->translateLabel(),
                Infolists\Components\TextEntry::make('phone')
                    ->translateLabel(),
                Infolists\Components\TextEntry::make('country')
                    ->translateLabel(),
                Infolists\Components\TextEntry::make('street')
                    ->translateLabel(),
                Infolists\Components\TextEntry::make('city')
                    ->translateLabel(),
                Infolists\Components\TextEntry::make('state')
                    ->translateLabel(),
                Infolists\Components\TextEntry::make('zip')
                    ->translateLabel(),
            ]);
    }

    #[\Override]
    public static function getNavigationBadge(): ?string
    {
        $count = Client::whereDate('created_at', Carbon::today())->count();

        return $count > 0 ? (string) $count : '';
    }
}
