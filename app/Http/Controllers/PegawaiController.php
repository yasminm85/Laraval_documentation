<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function main(){
        return view('welcome');
    }
    public function bio(){
        return view('halaman.biodata');
    }
    public function sent(Request $request){
        $name = $request['name'];
        $jk = $request['jk'];

        return view('halaman.home', ['name'=>$name, 'jk'=>$jk]);
    }
    public function master(){
        return view('layout.master');
    }
}
