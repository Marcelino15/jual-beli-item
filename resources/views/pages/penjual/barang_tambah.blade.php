@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Tambah Barang</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Penjual</li>
        <li class="breadcrumb-item active">Tambah Barang</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            Tambah Barang
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('barang-store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Barang">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control uang" id="harga" name="harga" placeholder="Masukkan Harga">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="gambar1">Gambar</label>
                        <input type="file" class="form-control" id="gambar1" name="Gambar1" placeholder="Masukkan Gambar">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="gambar2">Gambar</label>
                        <input type="file" class="form-control" id="gambar2" name="Gambar2" placeholder="Masukkan Gambar">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="gambar3">Gambar</label>
                        <input type="file" class="form-control" id="gambar3" name="Gambar3" placeholder="Masukkan Gambar">
                    </div>
                    <div class="col-12">
                        <label for="desc">Deskripsi</label>
                        <textarea name="desc" id="desc" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <input type="hidden" name="id_user" value="{{session('data')['id_user']}}">
                </div>
                <button type="submit" class="btn btn-success btn-sm text-uppercase">simpan</button>
                <a href="{{route('penjual')}}" class="btn btn-primary btn-sm text-uppercase">kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
@push('addon-script')
<script src="https://cdn.tiny.cloud/1/ve6dv3qkstg6ecakjvi15b0ftwla88pu92vds8kmwrokk842/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea'});</script>
<!-- Jquery Mask -->
<script src="{{url('backend/js/jquery.mask.min.js')}}"></script>
<script>
    $( function() {
        $('.uang').mask('000.000.000', {reverse:true});
    } );
</script>
@endpush