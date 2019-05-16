<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\produkModel;
use App\kategoriModel;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // //mendefinisikan kata kunci
        // $cari = $request->q;
        // //mencari data di database
        // $dataproduk = DB::table('produk')
        // ->where('nama_produk','like',"%".$cari."%")
        // ->paginate();
        // //return data ke view
        
        
        $dataproduk = produkModel::with(['get_kategori'])->when($request->keyword,function ($query) use ($request){
            $query->where('nama_produk','like', "%{$request->keyword}%");
        })->get();
    return view('dashboard.produk', compact('dataproduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = kategoriModel::all();
        return view('produk.createproduk',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        produkModel::insert([
            'idProduk' => $request->idProduk,
             'idKategory_fk' => $request->idKategory_fk,
            'nama_produk' => $request->nama_produk,
            'gambar' => $request->gambar,
            'size' => $request->size,
            'warna' => $request->warna,
            'deskripsi_produk' => $request->deskripsi_produk,
            'stok_produk' => $request->stok_produk,
            'harga_produk' => $request->harga_produk
            
          ]);

        return redirect('produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idProduk)
    {
        //
        $data = kategoriModel::all();
        return view('produk.createproduk',compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idProduk)
    {
        //
        $jenis = kategoriModel::all();
        $dataproduk = produkModel::where('idProduk',$idProduk)->get();
        return view('produk.editproduk', compact('dataproduk','jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idProduk)
    {
        //
        produkModel::where('idProduk',$idProduk)->update([
           
            'idProduk' => $request->idProduk,
             'idKategory_fk' => $request->idKategory_fk,
            'nama_produk' => $request->nama_produk,
            'gambar' => $request->gambar,
            'size' => $request->size,
            'warna'=> $request->warna,
            'deskripsi_produk' => $request->deskripsi_produk,
            'stok_produk' => $request->stok_produk,
            'harga_produk'=> $request->harga_produk   
        ]);
        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idProduk)
    {
        //
      produkModel::where('idProduk', $idProduk)->delete();
        return redirect('produk');
    }
}
