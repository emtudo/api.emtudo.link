<?php

namespace Emtudo\Support\Database;

use Illuminate\Database\Migrations\Migration as BaseMigration;

abstract class Migration extends BaseMigration
{
    /**
     * @var \Illuminate\Database\Schema\Builder
     */
    protected $schema;

    /**
     * Migration constructor.
     */
    public function __construct()
    {
        $this->schema = app('db')->connection()->getSchemaBuilder();
    }

    /**
     * Run the migrations.
     */
    abstract public function up();

    /**
     * Reverse the migrations.
     */
    abstract public function down();
}
