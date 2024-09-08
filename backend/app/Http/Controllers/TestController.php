<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    // 全てのデータを取得して返すAPI
    public function index()
    {
        // テーブルから全てのデータを取得
        $data = Test::all();
        
        // JSON形式でデータを返す
        return response()->json($data);
    }

    // 特定のIDのデータを取得して返すAPI
    public function show($id)
    {
        // IDでデータを検索して返す
        $data = Test::find($id);
        
        if (!$data) {
            return response()->json(['message' => 'Data not found'], 404);
        }

        return response()->json($data);
    }
}
