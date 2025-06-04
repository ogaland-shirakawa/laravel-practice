<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TPosts extends Migration
{
    public function up()
    {
        // Step01 t_posts(記事を管理するテーブル)
        Schema::create('t_posts', function (Blueprint $table) {
            $table->integer('id');
            $table->bigIncrements('post_user_id')->nullable(false);
            $table->string('title')->nullable(false);
            $table->text('body')->nullable();
            $table->dateTime('created_at');
            $table->datetime('updated_at');
            $table->datetime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_posts');
    }
};
