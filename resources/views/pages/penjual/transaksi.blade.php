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
            Daftar Transaksi
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pembeli</th>
                            <th>Status</th>
                            <th>Waktu</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Pembeli</th>
                            <th>Status</th>
                            <th>Waktu</th>
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
                                <td>{{$item->user->name}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->created_at}}</td>
                                <td class="text-center">
                                    <a href="{{route('barang-edit',$item->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
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