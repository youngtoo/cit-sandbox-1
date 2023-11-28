<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserIssuesResource\Pages;
use App\Filament\Resources\UserIssuesResource\RelationManagers;
use App\Models\UserIssues;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;

class UserIssuesResource extends Resource
{
    protected static ?string $model = UserIssues::class;

  
    protected static ?string $navigationGroup = 'Issues';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Label')
                    ->tabs([
                        Tabs\Tab::make('Issue Summary')
                            ->schema([
                                // ...

                                Section::make('Issue Summary')
                    ->description('Summary Issue')
                    ->schema([
                        
                        Forms\Components\Select::make('end_user_id')
                            ->relationship('endUser', 'full_names')
                            ->required(),

                        Forms\Components\Select::make('issue_type_id')
                            ->relationship('issueType', 'issue_type')
                            ->required(),

                        Forms\Components\Select::make('issue_source_id')
                            ->relationship('issueSource', 'issue_source')
                            ->required(),
                            
                        Forms\Components\Select::make('issue_product_id')
                            ->relationship('issueProduct', 'issue_product')
                            ->required(),

                    
                        Forms\Components\Select::make('issue_status_id')
                            ->relationship('issueStatus', 'issue_status')
                            ->required(),
                        
                        Forms\Components\Select::make('service_type_id')
                            ->relationship('serviceType', 'service_type')
                            ->required(),
                        
                ]),
                            ]),
                        Tabs\Tab::make('Issue Details')
                            ->schema([
                                // ...

                                Section::make('Issue Details')
                                ->description('Record Details about the issue')
                                ->schema([
                                    // ...
                                    Forms\Components\RichEditor::make('description')
                                        ->maxLength(255),
                                    Forms\Components\RichEditor::make('root_cause')
                                        ->maxLength(255),
                                    Forms\Components\RichEditor::make('resolution')
                                        ->maxLength(255),
                                        
                            ]),
                            ]),
                        Tabs\Tab::make('Other')
                            ->schema([
                                // ...
                            ]),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('endUser.full_names'),
                Tables\Columns\TextColumn::make('endUser.email'),
                Tables\Columns\TextColumn::make('endUser.office.office')->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('issueSource.issue_source')->toggleable(isToggledHiddenByDefault: true),
                //Tables\Columns\TextColumn::make('issueProduct.issue_product'),
                Tables\Columns\TextColumn::make('issueType.issue_type'),
                Tables\Columns\TextColumn::make('issueStatus.issue_status'),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUserIssues::route('/'),
            'create' => Pages\CreateUserIssues::route('/create'),
            'edit' => Pages\EditUserIssues::route('/{record}/edit'),
        ];
    }
}
