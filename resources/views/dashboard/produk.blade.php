@extends('layouts.master')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">PRODUK</h3>
              <form action=""  class="sidebar-form">
                  <div class="input-group">
                    <input type="text" name="keyword" class="form-control" placeholder="Search...">
                      <span class="input-group-btn">
                      <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                      </button>
                      </span>
                  </div>
              </form>
              <a href="{{url('tambahdataproduk')}}"> Create </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered" style="width: auto">
                <tr>
                  <th>ID Produk</th>
                  <th>Jenis Kategori</th>
                  <th>Nama Produk</th>
                  <th>Jenis Kain</th>
                  <th>Size</th>
                  <th>Warna</th>
                  <th>Deskripsi Produk</th>
                  <th>Stok Produk</th>
                  <th>Harga Produk</th>
                  <th>Options</th>
                </tr>
                <?php $no=1; ?>
                @foreach ($dataproduk as $row)
                <tr>
                    <th>{{ $row->idProduk }}</th>
                    <th>{{ $row->get_kategori->jenis_kategori }}</th>
                    <th>{{ $row->nama_produk}}</th>
                    <th>{{ $row->gambar }}</th>
                    <th>{{ $row->size }}</th>
                    <th>{{ $row->warna }}</th>
                    <th>{{ $row->deskripsi_produk }}</th>
                    <th>{{ $row->stok_produk }}</th>
                    <th>{{ $row->harga_produk }}</th>
                    
                    <th> 
                        <a href="editproduk/{{$row->idProduk}}">Edit</a>
                        <a href="hapusproduk/{{$row->idProduk}}">Delete</a>
                    </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
</section>
          <!-- /.box -->
@endsection

