<?php

namespace Emtudo\Domains\Usres\Providers;

use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;
use Emtudo\Domains\Usres\Database\Migrations;

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