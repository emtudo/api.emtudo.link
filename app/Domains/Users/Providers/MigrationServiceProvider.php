<?php

namespace Emtudo\Domains\Users\Providers;

use Emtudo\Domains\Users\Database\Migrations;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;

class MigrationServiceProvider extends ServiceProvider
{
    use MigratorTrait;

    public function register()
    {
        $this->migrations([
            Migrations\CreateUsersTable::class,
            Migrations\CreatePasswordResetsTable::class,
        ]);
    }
}
