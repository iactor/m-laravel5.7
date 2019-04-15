<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class RedisController extends Controller
{
    //
    public function index(){
        $redis = new \Redis();
        $ret = $redis->connect('127.0.0.1',6397,30);
        $ret = $redis->auth('');

        $redis->set('hello','world');
        dump($redis);
    }
}
