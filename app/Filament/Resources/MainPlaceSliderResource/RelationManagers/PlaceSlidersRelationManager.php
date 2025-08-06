<?php

namespace App\Filament\Resources\MainPlaceSliderResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlaceSlidersRelationManager extends RelationManager
{
    protected static string $relationship = 'placeSliders';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('sub_title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->disk('public')
                    ->visibility('public')
                    ->directory('uploads/placeSliders')
                    ->columnSpanFull()
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('main_place_slider_id')
            ->columns([
                Tables\Columns\TextColumn::make('title')
                ->limit(20),
                Tables\Columns\SelectColumn::make('status')
                    ->width('100px')
                    ->options([
                        'Active' => 'Active',
                        'Inactive' => 'Inactive',
                    ])
                    ->default(fn ($record) => $record?->status ?? 'Active')
                    ->inline()
                    ->sortable()
                    ->searchable()
                    ->afterStateUpdated(function ($record, $state) {
                        Notification::make()
                            ->body("Place Slider status changed to {$state}.")
                            ->success()
                            ->send();
                    }),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()->authorize(fn () => true),
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->authorize(fn () => true),
                Tables\Actions\EditAction::make()->authorize(fn () => true),
                Tables\Actions\DeleteAction::make()->authorize(fn () => true),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->authorize(fn () => true),
                ]),
            ]);
    }
}
