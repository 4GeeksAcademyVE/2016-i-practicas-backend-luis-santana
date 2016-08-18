<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index(){

        $posts = Posts::all();

        return view('index',['posts'=>$posts]);
    }
}
