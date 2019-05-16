@extends('layouts.master')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
			 <div class="box">
	   <form action="{{url('tambahproduk')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Create data produk</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
            
            <div class="box-body">
           <div class="form-group">
               <label> Jenis Kategori </label>
               <select name="idKategory_fk" class="form-control">
                   @foreach ($data as $row)
                   <option value ="{{ $row->idKategory}}">{{ $row->jenis_kategori}}</option>
                   @endforeach
                   </select>
                   </div></div>
                   
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i>Nama Produk </span>
                <input title="nama_produk"type="text" name="nama_produk" autocomplete="off" required class="form-control">
				</div><br>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i>Jenis Kain</span>
                <input title="gambar"type="text" name="gambar" autocomplete="off" required class="form-control">
				</div><br>
                 <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Size </span>
                <input title="size"type="text" name="size" autocomplete="off" required class="form-control" >
				</div><br>
                 <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Warna </span>
                <input title="warna"type="text" name="warna" autocomplete="off" required class="form-control" >
				</div><br>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Deskripsi Produk</span>
                <input title="deskripsi_produk"type="text" name="deskripsi_produk" autocomplete="off" required class="form-control" >
				</div><br>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Stok Produk </span>
                <input title="stok_produk"type="text" name="stok_produk" autocomplete="off" required class="form-control" >
				</div><br>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Harga Produk </span>
                <input title="harga_produk"type="text" name="harga_produk" autocomplete="off" required class="form-control" >
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
          <!-- /.box -->
@endsection