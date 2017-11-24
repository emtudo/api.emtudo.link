<?php

namespace Emtudo\Domains\Links\Database\Migrations;

use Emtudo\Support\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        $this->schema->create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('url');
            $table->string('slug')->nullable();
            $table->bigInteger('clicks')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        $this->schema->dropIfExists('links');
    }
}
