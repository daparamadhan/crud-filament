<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope; // Jika Anda menggunakan Soft Deletes

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text'; // Ikon yang sesuai

    protected static ?string $navigationGroup = 'Manajemen Situs'; // Opsional: Kelompokkan navigasi

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->readOnly(), // Biasanya read-only karena ini dari user
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->readOnly(), // Biasanya read-only
                Forms\Components\Textarea::make('message')
                    ->required()
                    ->columnSpanFull() // Mengambil seluruh lebar kolom
                    ->readOnly(), // Biasanya read-only
                Forms\Components\DateTimePicker::make('created_at')
                    ->label('Received At')
                    ->readOnly()
                    ->visibleOn('view'), // Hanya tampilkan di halaman view
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('message')
                    ->limit(50) // Batasi tampilan pesan di tabel
                    ->tooltip(fn (Contact $record): string => $record->message) // Tampilkan tooltip untuk pesan lengkap
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(), // Menggunakan View Action untuk melihat detail
                Tables\Actions\DeleteAction::make(), // Menggunakan Delete Action
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
        'index' => Pages\ListContacts::route('/'),
        'create' => Pages\CreateContact::route('/create'),
        'view' => Pages\ViewContact::route('/{record}'), 
        'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                // SoftDeletingScope::class, // Jika menggunakan soft deletes
            ])
            ->latest(); // Urutkan berdasarkan yang terbaru
    }
}