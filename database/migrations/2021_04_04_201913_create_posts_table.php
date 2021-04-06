<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {

        $table->increments('id');
        $table->unsignedInteger('user_id');
        $table->string('cAccount');
        $table->string('cName');
        $table->string('cGender');
        $table->string('cBirthday');
        $table->string('cEmail');
        $table->string('cExplain');
        $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
