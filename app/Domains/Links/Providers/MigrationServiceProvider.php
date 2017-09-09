<?php

namespace Emtudo\Domains\Links\Providers;

use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait;
use Emtudo\Domains\Links\Database\Migrations\CreateLinksTable;

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