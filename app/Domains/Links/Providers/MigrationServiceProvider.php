<?php

namespace Emtudo\Domains\Links\Providers;

use Emtudo\Domains\Links\Database\Migrations\CreateLinksTable;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;

class MigrationServiceProvider extends ServiceProvider
{
    use MigratorTrait;

    public function register()
    {
        $this->migrations([
            CreateLinksTable::class,
        ]);
    }
}
