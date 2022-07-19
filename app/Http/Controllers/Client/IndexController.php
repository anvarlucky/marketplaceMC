<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('client.index');
    }

    public function index2(){
        return view('client.index2');
    }

    public function house(){
        return view('client.house');
    }
    public function detsad(){
        return view('client.detsad');
    }

    public function cluster(){
        return view('client.cluster');
    }

    public function details(){
        return view('client.details');
    }

    public function car1_details(){
        return view('client.car1_details');
    }

    public function car2_details(){
        return view('client.car2_details');
    }

    public function car3_details(){
        return view('client.car3_details');
    }

    public function car4_details(){
        return view('client.car4_details');
    }

    public function filters(){
        return view('client.filter');
    }

    public function categories(){
        return view('client.categories');
    }

    public function materials(){
        return view('client.materials');
    }

    public function detmaterials(){
        return view('client.detalis_materials');
    }

    public function detailtaxta(){
        return view('client.details_taxta');
    }

    public function detailgisht(){
        return view('client.details_gisht');
    }

    public function detailarmatura()
    {
        return view('client.detail_armatura');
    }
    public function detailplita(){
        return view('client.details_plita');
    }

    public function detkley(){
        return view('client.details_kley');
    }
}
