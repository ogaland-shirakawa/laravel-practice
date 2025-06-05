<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tpost extends Model
{
    // テーブル名を指定
    // このモデルクラスがLaravelにマッピングされます
    protected $table = "t_posts";

    // Laravelが変更することが可能なカラム名を定義
    protected $fillable = ['id','post_user_id','title','body','created_at','updated_at','deleted_at'];

    // データベース接続
    protected $connection = 'mariadb';
}
