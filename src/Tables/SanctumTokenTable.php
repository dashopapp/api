<?php

namespace Dashopapp\Api\Tables;

use Dashopapp\Api\Models\PersonalAccessToken;
use Dashopapp\Table\Abstracts\TableAbstract;
use Dashopapp\Table\Actions\DeleteAction;
use Dashopapp\Table\BulkActions\DeleteBulkAction;
use Dashopapp\Table\Columns\Column;
use Dashopapp\Table\Columns\CreatedAtColumn;
use Dashopapp\Table\Columns\DateTimeColumn;
use Dashopapp\Table\Columns\IdColumn;
use Dashopapp\Table\Columns\NameColumn;
use Dashopapp\Table\HeaderActions\CreateHeaderAction;
use Illuminate\Database\Eloquent\Builder;

class SanctumTokenTable extends TableAbstract
{
    public function setup(): void
    {
        $this
            ->setView('packages/api::table')
            ->model(PersonalAccessToken::class)
            ->addHeaderAction(CreateHeaderAction::make()->route('api.sanctum-token.create'))
            ->addAction(DeleteAction::make()->route('api.sanctum-token.destroy'))
            ->addColumns([
                IdColumn::make(),
                NameColumn::make(),
                Column::make('abilities')
                    ->label(trans('packages/api::sanctum-token.abilities')),
                DateTimeColumn::make('last_used_at')
                    ->label(trans('packages/api::sanctum-token.last_used_at')),
                CreatedAtColumn::make(),
            ])
            ->addBulkAction(DeleteBulkAction::make())
            ->queryUsing(fn (Builder $query) => $query->select([
                'id',
                'name',
                'abilities',
                'last_used_at',
                'created_at',
            ]));
    }
}
