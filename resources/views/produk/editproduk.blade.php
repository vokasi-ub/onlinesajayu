@extends('layouts.master')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
			 <div class="box">
             @foreach ($dataproduk as $row2)

	   <form action="{{ url('updateproduk/'.$row2->idProduk) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> edit data produk</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
             
           <div class="form-group">
               <label> Jenis Kategori </label>
               <select name="idKategory_fk" class="form-control">
                   @foreach ($jenis as $row)
                   <option value ="{{ $row->idKategory}}">{{ $row->jenis_kategori}}</option>
                   @endforeach
                   </select>
                   </div>
            
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i>Nama Produk </span>
                <input title="nama_produk"type="text" name="nama_produk" autocomplete="off" required class="form-control" value="{{$row2->nama_produk}}">
				</div><br>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Jenis Kain </span>
                <input title="gambar"type="text" name="gambar" autocomplete="off" required class="form-control" value="{{$row2->gambar}}">
				</div><br>
                 <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Size </span>
                <input title="size"type="text" name="size" autocomplete="off" required class="form-control" value="{{$row2->size}}">
				</div><br>
                 <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Warna </span>
                <input title="warna"type="text" name="warna" autocomplete="off" required class="form-control" value="{{$row2->warna}}">
				</div><br>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Deskripsi Produk</span>
                <input title="deskripsi_produk"type="text" name="deskripsi_produk" autocomplete="off" required class="form-control" value="{{$row2->deskripsi_produk}}">
				</div><br>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Stok Produk </span>
                <input title="stok_produk"type="text" name="stok_produk" autocomplete="off" required class="form-control" value="{{$row2->stok_produk}}">
				</div><br>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Harga Produk </span>
                <input title="harga_produk"type="text" name="harga_produk" autocomplete="off" required class="form-control" value="{{$row2->harga_produk}}">
				</div><br>
                
				
		</div>
        <div class="box-footer">
			<div class="col-md-offset-10 col-md-9">		
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
			</div>
		
        </div>
		</form>
		</div>
      </div>
      </div>
</section>
    @endforeach	
@endsection