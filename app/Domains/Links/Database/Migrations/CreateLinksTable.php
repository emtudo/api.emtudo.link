<?php

namespace Emtudo\Domains\Links\Database\Migrations;

use Emtudo\Support\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->unsingnedInteger('user_id');
            $table->string('url');
            $table->string('slug')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->schema->dropIfExists('links');
    }
}
