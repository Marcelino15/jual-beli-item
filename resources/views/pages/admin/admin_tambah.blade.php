@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Tambah Admin</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">Admin</li>
        <li class="breadcrumb-item active">Tambah Admin</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            Tambah Admin
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
            <form action="{{route('admin-store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="no_hp">No Handphone</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan NomorHandphone">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat Email">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
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