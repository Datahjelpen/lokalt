<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaceRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET SESSION sql_require_primary_key=0');

        Schema::create('place_roles', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable()->default(null);
            $table->tinyInteger('place_type_id')->unsigned();
            $table->foreign('place_type_id')->references('id')->on('place_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('place_roles');
    }
}
