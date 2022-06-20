<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('client.index');
    }

    public function cluster(){
        return view('client.cluster');
    }

    public function details(){
        return view('client.details');
    }

    public function filters(){
        return view('client.filter');
    }

    public function categories(){
        return view('client.categories');
    }
}
