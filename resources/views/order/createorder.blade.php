@extends('layouts.master')
@section('content')

    <!-- Main content -->
    <section class="content">
      <div class="row">
			 <div class="box">
	   <form action="{{url('tambahorder')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
	   {{ csrf_field() }}
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-tags"></i> Create data detail pesanan</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
		<div class="box-body">
                <div class="box-body">
           <div class="form-group">
               <label> Nama Produk </label>
               <select name="idProduk_fk"  class="form-control">
                   @foreach ($nama as $row)
                   <option value ="{{ $row->idProduk}}">{{ $row->nama_produk}}</option>
                   @endforeach
                   </select>
                   </div></div>
                   
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Tanggal Order </span>
                <input title="Tanggal"type="text" name="tgl_order" autocomplete="off" required class="form-control" >
				</div><br>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Detail Order </span>
                <input title="Detai "type="text" name="detail_order" autocomplete="off" required class="form-control" >
				</div><br>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Jumlah Order</span>
                <input title="Jumlah"type="text" name="jumlah_order" autocomplete="off" required class="form-control" >
				</div><br>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Harga </span>
                <input title="Harga"type="text" name="harga" autocomplete="off" required class="form-control" >
				</div><br>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tags"></i> Total Harga </span>
                <input title="Total "type="text" name="total" autocomplete="off" required class="form-control" >
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