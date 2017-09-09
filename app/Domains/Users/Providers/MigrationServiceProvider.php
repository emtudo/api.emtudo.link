<?php

namespace Emtudo\Domains\Users\Providers;

use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;
use Emtudo\Domains\Users\Database\Migrations;

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