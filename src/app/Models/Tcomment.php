<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tcomment extends Model
{
    // 実際のDBに存在するテーブル名を指定
    protected $table = "t_comments";

    // Laravelが変更することが可能なカラム名を定義
    protected $fillable = ['id','post_id','comment_user_id','creaqted_at','updated_at','deleted_at','comment'];

    // データベース接続
    protected $connection = 'mariadb';
}
