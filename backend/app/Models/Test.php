<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    // テーブル名を指定
    protected $table = 'test_tbl';

    // もしテーブルにタイムスタンプ(created_at、updated_at)がない場合
    public $timestamps = false;

    // データベース内のカラム名を指定する場合
    protected $fillable = [
        'id', 'name'
    ];
}
