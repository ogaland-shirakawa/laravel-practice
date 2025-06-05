<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tcomments extends Migration
{
    public function up()
    {
        // Step01 t_comments （記事に紐づくコメントを管理するテーブル）
        // Schema::create('t_comments', function (Blueprint $table) {
        //     $table->increments('id')->nullable(false);
        //     $table->bigInteger('post_id')->nullable(false);
        //     $table->bigInteger('comment_user_id')->nullable(false);
        //     $table->dateTime('created_at');
        //     $table->dateTime('updated_at');
        //     $table->dateTime('deleted_at')->nullable();
        // });

        // Step02 カラムを追加
            Schema::table('t_comments', function (Blueprint $table) {
                $table->text('comments')->nullable();
            });
    }
    public function down()
    {
        Schema::table('t_comments', function (Blueprint $table) {
            $table->dropColumn('comments');
        });
    }
};
