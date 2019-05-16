<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\orderModel;
use App\produkModel;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /** return view('dashboard.dashboard'); */

        // //mendefinisikan kata kunci
        // $cari = $request->q;
        // //mencari data di database
        // $dataorder = DB::table('order')
        // ->where('idProduk','like',"%".$cari."%")
        // ->paginate();
        // //return data ke view
        
        $dataorder = orderModel::with(['get_produk'])->when($request->keyword,function ($query) use ($request){
            $query->where('tgl_order','like', "%{$request->keyword}%");
        })->get();
        return view('dashboard.order', compact('dataorder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nama = produkModel::all();
        return view('order.createorder',compact('nama'));
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
        orderModel::insert([
            'idOrder' => $request->idOrder,
            'idProduk_fk' => $request->idProduk_fk,
            'tgl_order' => $request->tgl_order,
            'detail_order' => $request ->detail_order,
            'jumlah_order' => $request->jumlah_order,
            'harga' => $request->harga,
            'total' => $request->total
          ]);

        return redirect('order');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idOrder)
    {
        //
        $nama = produkModel::all();
        return view('order.createorder',compact('nama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idOrder)
    {
        //
        $namap = produkModel::all();
        $dataorder = orderModel::where('idOrder',$idOrder)->get();
        return view('order.editorder', compact('dataorder','namap'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idOrder)
    {
        //
        orderModel::where('idOrder',$idOrder)->update([
           
            'idOrder' => $request->idOrder,
             'idProduk_fk' => $request->idProduk_fk,
            'tgl_order' => $request->tgl_order,
            'detail_order' => $request -> detail_order,
            'jumlah_order' => $request->jumlah_order,
            'harga' => $request->harga,
            'total' => $request->total
        ]);
        return redirect('order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idOrder)
    {
        //
       orderModel::where('idOrder', $idOrder)->delete();
        return redirect('order');
    }
}
