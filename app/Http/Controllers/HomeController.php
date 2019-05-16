<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\kategoriModel;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        //mendefinisikan kata kunci
        $cari = $request->q;
        //mencari data di database
        $datakategori = kategoriModel::where('jenis_kategori','like',"%".$cari."%")
        ->paginate();
        //return data ke view
        return view('dashboard.kategori', compact('datakategori'));

    }
    public function store(Request $request)
    {
        //
        kategoriModel::insert([
            'jenis_kategori' => $request->jenis_kategori
          ]);

        return redirect('kategori');
    }

    public function edit($idKategory)
    {
        //
        $datakategori = kategoriModel::where('idKategory',$idKategory)->get();
        return view('kategori.editkategori', compact('datakategori'));
    }

    public function update(Request $request, $idKategory)
    {
        //
        kategoriModel::where('idKategory',$idKategory)->update([
           
            'jenis_kategori' => $request->jenis_kategori,
        ]);
        return redirect('kategori');
    }

    public function create()
    {
        //
        return view('kategori.createkategori');
    }

    public function show($idKategory)
    {
        //
        return view('kategori.createkategori');
    }

    public function destroy($idKategory)
    {
        //
        kategoriModel::where('idKategory', $idKategory)->delete();
        return redirect('kategori');
    }


}