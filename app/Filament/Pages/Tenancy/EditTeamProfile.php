<?php

namespace App\Filament\Pages\Tenancy;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\EditTenantProfile;
use Illuminate\Database\Eloquent\Model;

class EditTeamProfile extends EditTenantProfile
{
    public static function getLabel(): string
    {
        return 'Team Profile';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Team Name')
                    ->description('The teams name and owner information.')
                    ->aside()
                    ->schema([
                        TextInput::make('name'),
                        TextInput::make('slug'),
                        // $this->getForms()
                    ])
            ]);
    }
}
