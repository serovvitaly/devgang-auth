<?php

use App\Models\TokenModel;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TokenModel::TABLE_NAME, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('token', 128)->unique();
            $table->integer('form_id');
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
        Schema::dropIfExists(TokenModel::TABLE_NAME);
    }
}
