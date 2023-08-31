<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function create(){
        return view('kategori.create');
    }
    //create
    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required'
        ]);
        DB::table('kategori')->insert([
            'nama' => $request['nama'],
            'deskripsi' => $request['deskripsi']
        ]);

        return redirect('/kategori');
    }
    //read
    public function tampil(){
        $kategori = DB::table('kategori')->get();
        // dd($kategori);
        return view('kategori.tampil', ['kategori' => $kategori]);
    }
    //detail
    public function show($id){
        $kategori = DB::table('kategori')->where('id', $id)->first();

        return view('kategori.detail', ['kategori'=> $kategori]);
    }
    //narik data edit
    public function edit($id){
        $kategori = DB::table('kategori')->where('id', $id)->first();

        return view('kategori.edit', ['kategori'=> $kategori]);
    }
    //update ke database
    public function update(Request $request, $id){
        DB::table('kategori')
              ->where('id', $id)
              ->update(
                [
                    'nama' => $request->nama,
                    'deskripsi' => $request->deskripsi
              ],
        );
        return redirect('/kategori');
    }
    public function destroy($id){
        DB::table('kategori')->where('id', $id)->delete();
       return redirect('/kategori');
    }
}
