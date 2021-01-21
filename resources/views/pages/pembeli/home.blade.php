@extends('layouts.app')

@section('content')
<!-- Product Area -->
<section class="product-section product-section-02">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2>Beli Items <span>Disini</span> </h2>
                    <p>
                       Enjoy your games, in another level
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
            @foreach ($barang as $data)
            <div class="col-lg-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{url('frontend/assets/img/product/'.$data->gambar1)}}" alt="Images">
                        <div class="top-tag">
                           {{-- <H6>HEALTH </H6>  --}}
                            {{-- <div class="ribbon ribbon-color-01"> <span>sale</span></div> --}}
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="d-flex align-item-center justify-content-between"><a href="#">{{$data->nama}}</a>
                        <span>IDR {{ number_format($data->harga) }}</span>
                            
                        </h5>
                        <div class="d-flex align-item-center justify-content-between">
                            <a href="{{url('/keranjang/'.$data->id) }}" class="cart-btn btn btn-success">
                                BELI
                            <i class="ti-shopping-cart-full"></i></a>
                            <a href="{{ url('/detail/'.$data->id) }}" class="detail-btn btn btn-warning">
                                DETAIL
                            <i class="fa fa-eye"></i></a>
                           
                        </div>
                    </div>
                </div>
            </div>
                
            @endforeach
            

          
        

            

           
            
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
