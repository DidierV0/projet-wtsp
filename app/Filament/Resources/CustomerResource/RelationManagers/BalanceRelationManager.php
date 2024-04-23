<?php

namespace App\Filament\Resources\CustomerResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BalanceRelationManager extends RelationManager
{
    protected static string $relationship = 'balance';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('customer_id')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nbMessageSent')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nbMessagePaid')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('nbMessageSent')
            ->columns([
                Tables\Columns\TextColumn::make('customer.uid'),
                Tables\Columns\TextColumn::make('customer.last_name'),
                Tables\Columns\TextColumn::make('customer.firstname'),
                Tables\Columns\TextColumn::make('customer.email'),
                Tables\Columns\TextColumn::make('nbMessageSent'),
                Tables\Columns\TextColumn::make('nbMessagePaid'),
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
