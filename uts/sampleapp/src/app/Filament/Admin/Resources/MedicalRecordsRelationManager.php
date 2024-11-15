<?php

namespace App\Filament\Admin\Resources\PatientResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;

class MedicalRecordsRelationManager extends RelationManager
{
    protected static string $relationship = 'medicalRecords'; // Nama relasi di Patient model

    protected static ?string $recordTitleAttribute = 'description';

    // Hapus static di sini
    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('description')
                    ->label('Description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('record_date')
                    ->label('Record Date')
                    ->date()
                    ->sortable(),
            ])
            ->filters([/* Filter dapat ditambahkan di sini */])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('description')
                    ->required(),
                Forms\Components\DatePicker::make('record_date')
                    ->required(),
            ]);
    }
}
