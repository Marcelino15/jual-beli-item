@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Data Barang Penjual</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Barang</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Daftar Barang Penjual
            <a href="{{route('barang-create')}}" class="btn btn-sm btn-success float-right"><i class="fa fa-plus mr-1"></i>Tambah Barang</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $i=1
                        @endphp
                        @forelse ($items as $item)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{number_format($item->harga,0,'.','.')}}</td>
                                <td class="text-center">
                                    <a href="{{route('barang-edit',$item->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('barang-destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @php
                            $i++
                        @endphp
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection