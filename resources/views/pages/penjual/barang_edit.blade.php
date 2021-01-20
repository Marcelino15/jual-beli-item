@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Edit Barang</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Penjual</li>
        <li class="breadcrumb-item active">Edit Barang</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            Edit Barang
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
            <form action="{{route('barang-update',$item->id)}}" method="post">
                @method('PUT')    
                @csrf
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Barang" value="{{$item->nama}}">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control uang" id="harga" name="harga" placeholder="Masukkan Harga" value="{{number_format($item->harga,0,'.','.')}}">
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <img src="{{ url('gambar/',$item->gambar1) }}" alt="gambar1" class="img-fluid img-thumbnail">
                        <button type="button" class="btn btn-info btn-sm text-uppercase" data-toggle="modal" data-target="#gambar1Modal">ganti</button>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <img src="{{ url('gambar/',$item->gambar2) }}" alt="gambar2" class="img-fluid img-thumbnail">
                        <button type="button" class="btn btn-info btn-sm text-uppercase" data-toggle="modal" data-target="#gambar2Modal">ganti</button>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <img src="{{ url('gambar/',$item->gambar3) }}" alt="gambar3" class="img-fluid img-thumbnail">
                        <button type="button" class="btn btn-info btn-sm text-uppercase" data-toggle="modal" data-target="#gambar3Modal">ganti</button>
                    </div>
                    <div class="col-12">
                        <label for="desc">Deskripsi</label>
                        <textarea name="desc" id="desc" cols="30" rows="10" class="form-control">{{$item->deskripsi}}</textarea>
                    </div>
                    <input type="hidden" name="id_user" value="{{session('data')['id_user']}}">
                </div>
                <button type="submit" class="btn btn-success btn-sm text-uppercase">simpan</button>
                <a href="{{route('penjual')}}" class="btn btn-primary btn-sm text-uppercase">kembali</a>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit Gambar 1 -->
<div class="modal fade" id="gambar1Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ganti Gambar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('barang-update-foto',$item->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="gambar1">Gambar</label>
                        <input type="file" id="gambar1" class="form-control" name="gambar1" placeholder="Masukkan Gambar">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="keterangan" value="gambar1">
                    <input type="hidden" name="gambar_lama" value="{{$item->gambar1}}">
                    <button type="submit" class="btn btn-success text-uppercase">simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit Gambar 2 -->
<div class="modal fade" id="gambar2Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ganti Gambar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('barang-update-foto',$item->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="gambar2">Gambar</label>
                        <input type="file" id="gambar2" class="form-control" name="gambar2" placeholder="Masukkan Gambar">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="keterangan" value="gambar2">
                    <input type="hidden" name="gambar_lama" value="{{$item->gambar2}}">
                    <button type="submit" class="btn btn-success text-uppercase">simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit Gambar 3 -->
<div class="modal fade" id="gambar3Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ganti Gambar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('barang-update-foto',$item->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="gambar3">Gambar</label>
                        <input type="file" id="gambar3" class="form-control" name="gambar3" placeholder="Masukkan Gambar">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="keterangan" value="gambar3">
                    <input type="hidden" name="gambar_lama" value="{{$item->gambar3}}">
                    <button type="submit" class="btn btn-success text-uppercase">simpan</button>
                </div>
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