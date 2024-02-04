<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageGeneralSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = GeneralSettings::class;

    protected static ?string $title = 'Settings';

    #[\Override]
    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Settings Details')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->translateLabel()
                            ->required()
                            ->string()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('address')
                            ->translateLabel()
                            ->required()
                            ->string(),
                        Forms\Components\TextInput::make('code')
                            ->translateLabel()
                            ->nullable()
                            ->string(),
                        Forms\Components\TextInput::make('vat')
                            ->translateLabel()
                            ->nullable()
                            ->string(),
                        Forms\Components\TextInput::make('phone')
                            ->translateLabel()
                            ->required()
                            ->string(),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                    ]),
            ]);
    }
}
