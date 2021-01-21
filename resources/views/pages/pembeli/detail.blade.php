@extends('layouts.app')

@section('content')
<!-- Product Area -->
<section class="product-section product-section-02">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2>{{ $barang->nama }}</span> </h2>
                    <p>
                        {{ $barang->deskipsi }}
                    </p>
                    <div class="section-border">
                        <div class="icon">
                            <i class="fas fa-tint"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        <div class="col-md-3">
            {{ $barang->gambar1 }}
        <div>
           <div class="col-md-3">
            {{ $barang->gambar2 }}
        <div>
            <div class="col-md-3">
                {{ $barang->gambar3 }}
            <div>
              
             <h4> IDR {{ number_format($barang->harga)}}</h4> 

           
             <div class="d-flex align-item-center justify-content-between">
                <a href="{{url('/keranjang/'.$barang->id) }}" class="cart-btn btn btn-success">
                    BELI
                <i class="ti-shopping-cart-full"></i></a>
               
               
            </div>
        </div>
    </div>
</section>
<!-- Product Area End -->

<!-- PARTNER SECTION START -->
<section class="partner-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel partner-logo">
                    <div class="item">
                        <img src="assets/img/partner/1.png" alt="">
                    </div>
                    <div class="item">
                        <img src="assets/img/partner/2.png" alt="">
                    </div>
                    <div class="item">
                        <img src="assets/img/partner/3.png" alt="">
                    </div>
                    <div class="item">
                        <img src="assets/img/partner/4.png" alt="">
                    </div>
                    <div class="item">
                        <img src="assets/img/partner/5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- PARTNER SECTION END -->
@endsection
