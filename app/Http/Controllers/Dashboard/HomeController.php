<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/* 后台登录控制器 */

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @desc:   后台登录面板
     * @auth:   hyb
     * @date:   2017/9/26
     * @time:   21:53
     * @param:
     * @return: view
     */
    public function index(){
        return view('dashboard.home');
    }
}