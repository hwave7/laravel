<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //20220401
  public function index()
  {
//    return view('hello');
    // 配列の初期化
    $data = array();

    // データ格納
    $data['name'] = '鈴木';
    $data['message'] = 'こんにちは';

    // 現在日時
    date_default_timezone_set('Asia/Tokyo');
    $data['today'] = date('Y年m月d日 H:i:s');

    return view('hello', $data);
  }
}
