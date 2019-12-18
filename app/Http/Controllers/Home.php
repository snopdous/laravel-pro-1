<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Home extends Controller
{
    function index()
    {
         $data['id']= DB::table('invoice')->get();
        return view('home',$data);
    }
    function about()
    {
         $id= DB::table('inventry')->get();
        return view('home',$data);
    }
}