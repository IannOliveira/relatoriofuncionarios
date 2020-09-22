<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function test(){
        $users=DB::select('select * from odi_subestacao');
        dd($users);
    }
}