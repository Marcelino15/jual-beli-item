@extends('layouts.app')

@section('content')
<table id="cart" class="table table-hover table-condensed">
    <thead>
    <tr>
        <th style="width:50%">Product</th>
        <th style="width:10%">harga</th>
        <th style="width:8%">qty</th>
        <th style="width:22%" class="text-center">Subtotal</th>
        <th style="width:10%"></th>
    </tr>
    </thead>
    <tbody>
    <?php $total = 0 ?>
    @if(session('cart'))
        @foreach(session('cart') as $id => $details)
            <?php $total += $details['harga'] * $details['qty'] ?>
            <tr>
                <td data-th="Product">
                    <div class="row">
                      
                        <div class="col-sm-9">
                            <h4 class="nomargin">{{ $details['nama'] }}</h4>
                        </div>
                    </div>
                </td>
                <td data-th="harga">IDR {{ $details['harga'] }}</td>
                <td data-th="qty">
                    <a href="{{ url('/kurangi-kuantitas/'.$id) }}" class="btn btn-dark btn-sm">-</a>
                    {{ $details['qty'] }}
                    <a href="{{ url('/tambah-kuantitas/'.$id) }}" class="btn btn-dark btn-sm">+</a>
                    
                   
                </td>
                <td data-th="Subtotal" class="text-center">IDR {{ number_format($details['harga'] * $details['qty']) }}</td>
                <td >
                    <a  class="btn btn-primary" href="{{ url('/keranjang-hapus/'.$id) }}">HAPUS</i></a>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
    <tfoot>
    <tr class="visible-xs">
        <td class="text-center"><strong>Total {{ $total }}</strong></td>
    </tr>
    <tr>
        <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Kembali</a></td>
        <td colspan="2" class="hidden-xs"></td>
        <td class="hidden-xs text-center"><strong>Total {{ number_format($total) }} Rupiah</strong></td>
    </tr>
    </tfoot>
</table>
@endsection
