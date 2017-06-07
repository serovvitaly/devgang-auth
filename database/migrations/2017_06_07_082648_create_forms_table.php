<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('domain_id');
            $table->string('name', 80);
            $table->string('title', 200);
            $table->string('description', 600)->default('');
            $table->string('redirect_url', 600);
            $table->string('callback_url', 600)->default('');
            $table->timestamps();
            $table->unique(['domain_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
