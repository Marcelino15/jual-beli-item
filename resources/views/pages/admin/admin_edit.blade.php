@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Edit Admin</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Admin</li>
        <li class="breadcrumb-item active">Edit Admin</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            Edit Admin
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
            <form action="{{ route('admin-update', $item->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" value="{{$item->name}}">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="no_hp">No Handphone</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan NomorHandphone" value="{{$item->no_hp}}">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat Email" value="{{$item->email}}">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-sm text-uppercase">simpan</button>
                <a href="{{route('list-admin')}}" class="btn btn-primary btn-sm text-uppercase">kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection