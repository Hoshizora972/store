<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use function Laravel\Prompts\select;
use Illuminate\Auth\Authenticatable;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Filters\SelectFilter;

use Illuminate\Database\Eloquent\Builder;
use Filament\Models\Contracts\FilamentUser;
use Filament\Tables\Columns\TextInputColumn;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('name')->required(),
                TextInput::make('email')->email()->required(),
                TextInput::make('password')
                ->dehydrateStateUsing(fn ($state) => Hash::make($state)) //les 3 lignes servent a donner la possibilité d'edit un profil sans avoir a remettre un mot de passe
                ->dehydrated(fn ($state) => filled($state))
                ->required(fn (string $context): bool => $context === 'create'),
                Select::make('role')->options(['user'=>'Client',
                                                'admin'=>'Administrateur']),
                //le select permet d'avoir une liste qui permettra de choisir le role de la personne sans avoir a taper du texte
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->label('Nom')//le label sert a modifier les titre sur le formulaire filament
                ->searchable()// la fonction searchable permet de rechercher un utilisateur par un nom ou un email
                ->sortable(),//la fonction sortable permet declasser le champ par ordre croissant
                TextInputColumn::make('name'), //fonction qui permet de modifier les information depuis le formulaire
                TextColumn::make('email')->searchable()->sortable()->label('Adresse Email')
                ->icon('heroicon-o-envelope'), // permet d'afficher une petite enveloppe en face des emails
                TextInputColumn::make('email'),
                SelectColumn::make('role')// permet de selectionner le role depuis le formulaire
                ->options([
                    'user' => 'Client',
                    'admin' => 'Administrateur',
                ])
            ])
            ->filters([
            // le filtre sert a selectionner les role a afficher tous les clients ou tous les administrateurs
                SelectFilter::make('role')
                    ->options([
                        'user' => 'Client',
                        'admin' => 'Administrateur',
                    ])
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
    
    
}
