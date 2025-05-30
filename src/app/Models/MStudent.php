<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MStudent extends Model
{
    // 実際のDBに存在するテーブル名を指定します
    // 指定することでテーブルとこのモデルクラスがLaravelにマッピングされます
    protected $table = "m_students";

    // Laravelが変更することが可能なカラム名を定義します。
    // ここに定義がないカラムは処理でデータ追加・更新・削除が出来ずにエラーになります
    protected $fillable = [
        'name',
        'age',
    ];
}