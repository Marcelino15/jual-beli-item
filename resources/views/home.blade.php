@extends('layouts.app')

@section('content')
<!-- Product Area -->
<section class="product-section product-section-02">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2>Our Online <span>Shop</span> </h2>
                    <p>
                        What kind ok the service you can grt from us.
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
            <div class="col-lg-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{url('frontend/assets/img/product/1.jpg')}}" alt="Images">
                        <div class="product-add">
                            <a href="#"><i class="ti-eye"></i></a>
                            <a href="#"><i class="ti-plus"></i></a>
                            <a href="#"><i class="ti-heart"></i></a>
                        </div>
                        <div class="top-tag">
                            <h6>Health </h6>
                            <div class="ribbon ribbon-color-01"> <span>sale</span></div>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="d-flex align-item-center justify-content-between"><a href="#">Vitamine</a>
                            <span>$300</span>
                            <div class="price text-right">
                                <del>$450</del>
                            </div>
                        </h5>
                        <div class="d-flex align-item-center justify-content-between">
                            <a href="#" class="cart-btn btn btn-secondary">cart <i
                                    class="ti-shopping-cart-full"></i></a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class='ti-star'></i>
                                <i class='ti-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{url('frontend/assets/img/product/2.jpg')}}" alt="Images">
                        <div class="product-add">
                            <a href="#"><i class="ti-eye"></i></a>
                            <a href="#"><i class="ti-plus"></i></a>
                            <a href="#"><i class="ti-heart"></i></a>
                        </div>
                        <div class="top-tag">
                            <h6> Health </h6>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="d-flex align-item-center justify-content-between"><a href="#">Xeljanz</a>
                            <span>$250</span>
                            <div class="price text-right">
                                <del>$350</del>
                            </div>
                        </h5>
                        <div class="d-flex align-item-center justify-content-between">
                            <a href="#" class="cart-btn btn btn-secondary">cart <i
                                    class="ti-shopping-cart-full"></i></a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class='ti-star'></i>
                                <i class='ti-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{url('frontend/assets/img/product/3.jpg')}}" alt="Images">
                        <div class="product-add">
                            <a href="#"><i class="ti-eye"></i></a>
                            <a href="#"><i class="ti-plus"></i></a>
                            <a href="#"><i class="ti-heart"></i></a>
                        </div>
                        <div class="top-tag">
                            <h6> Health </h6>
                            <div class="ribbon ribbon-color-02"><span>Sold Out</span></div>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="d-flex align-item-center justify-content-between"><a href="#">Tablet</a>
                            <span>$300</span>
                            <div class="price text-right">
                                <del>$450</del>
                            </div>
                        </h5>
                        <div class="d-flex align-item-center justify-content-between">
                            <a href="#" class="cart-btn btn btn-secondary">cart <i
                                    class="ti-shopping-cart-full"></i></a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class='ti-star'></i>
                                <i class='ti-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{url('frontend/assets/img/product/4.jpg')}}" alt="Images">
                        <div class="product-add">
                            <a href="#"><i class="ti-eye"></i></a>
                            <a href="#"><i class="ti-plus"></i></a>
                            <a href="#"><i class="ti-heart"></i></a>
                        </div>
                        <div class="top-tag">
                            <h6>Health </h6>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="d-flex align-item-center justify-content-between"><a href="#">Medicine</a>
                            <span>$300</span>
                            <div class="price text-right">
                                <del>$450</del>
                            </div>
                        </h5>
                        <div class="d-flex align-item-center justify-content-between">
                            <a href="#" class="cart-btn btn btn-secondary">cart <i
                                    class="ti-shopping-cart-full"></i></a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class='ti-star'></i>
                                <i class='ti-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{url('frontend/assets/img/product/5.jpg')}}" alt="Images">
                        <div class="product-add">
                            <a href="#"><i class="ti-eye"></i></a>
                            <a href="#"><i class="ti-plus"></i></a>
                            <a href="#"><i class="ti-heart"></i></a>
                        </div>
                        <div class="top-tag">
                            <h6>Health </h6>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="d-flex align-item-center justify-content-between"><a href="#">Vitamine</a>
                            <span>$300</span>
                            <div class="price text-right">
                                <del>$450</del>
                            </div>
                        </h5>
                        <div class="d-flex align-item-center justify-content-between">
                            <a href="#" class="cart-btn btn btn-secondary">cart <i
                                    class="ti-shopping-cart-full"></i></a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class='ti-star'></i>
                                <i class='ti-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{url('frontend/assets/img/product/6.jpg')}}" alt="Images">
                        <div class="product-add">
                            <a href="#"><i class="ti-eye"></i></a>
                            <a href="#"><i class="ti-plus"></i></a>
                            <a href="#"><i class="ti-heart"></i></a>
                        </div>
                        <div class="top-tag">
                            <h6> Health </h6>
                            <div class="ribbon ribbon-color-02"> <span>Sold Out</span></div>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="d-flex align-item-center justify-content-between"><a href="#">Xeljanz</a>
                            <span>$250</span>
                            <div class="price text-right">
                                <del>$350</del>
                            </div>
                        </h5>
                        <div class="d-flex align-item-center justify-content-between">
                            <a href="#" class="cart-btn btn btn-secondary">cart <i
                                    class="ti-shopping-cart-full"></i></a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class='ti-star'></i>
                                <i class='ti-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{url('frontend/assets/img/product/7.jpg')}}" alt="Images">
                        <div class="product-add">
                            <a href="#"><i class="ti-eye"></i></a>
                            <a href="#"><i class="ti-plus"></i></a>
                            <a href="#"><i class="ti-heart"></i></a>
                        </div>
                        <div class="top-tag">
                            <h6> Health </h6>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="d-flex align-item-center justify-content-between"><a href="#">Tablet</a>
                            <span>$300</span>
                            <div class="price text-right">
                                <del>$450</del>
                            </div>
                        </h5>
                        <div class="d-flex align-item-center justify-content-between">
                            <a href="#" class="cart-btn btn btn-secondary">cart <i
                                    class="ti-shopping-cart-full"></i></a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class='ti-star'></i>
                                <i class='ti-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{url('frontend/assets/img/product/8.jpg')}}" alt="Images">
                        <div class="product-add">
                            <a href="#"><i class="ti-eye"></i></a>
                            <a href="#"><i class="ti-plus"></i></a>
                            <a href="#"><i class="ti-heart"></i></a>
                        </div>
                        <div class="top-tag">
                            <h6>Health </h6>
                            <div class="ribbon ribbon-color-03"><span>-40%</span></div>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="d-flex align-item-center justify-content-between"><a href="#">Medicine</a>
                            <span>$300</span>
                            <div class="price text-right">
                                <del>$450</del>
                            </div>
                        </h5>
                        <div class="d-flex align-item-center justify-content-between">
                            <a href="#" class="cart-btn btn btn-secondary">cart <i
                                    class="ti-shopping-cart-full"></i></a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class='ti-star'></i>
                                <i class='ti-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{url('frontend/assets/img/product/1.jpg')}}" alt="Images">
                        <div class="product-add">
                            <a href="#"><i class="ti-eye"></i></a>
                            <a href="#"><i class="ti-plus"></i></a>
                            <a href="#"><i class="ti-heart"></i></a>
                        </div>
                        <div class="top-tag">
                            <h6>Health </h6>
                            <div class="ribbon ribbon-color-01"> <span>sale</span></div>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="d-flex align-item-center justify-content-between"><a href="#">Vitamine</a>
                            <span>$300</span>
                            <div class="price text-right">
                                <del>$450</del>
                            </div>
                        </h5>
                        <div class="d-flex align-item-center justify-content-between">
                            <a href="#" class="cart-btn btn btn-secondary">cart <i
                                    class="ti-shopping-cart-full"></i></a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class='ti-star'></i>
                                <i class='ti-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{url('frontend/assets/img/product/2.jpg')}}" alt="Images">
                        <div class="product-add">
                            <a href="#"><i class="ti-eye"></i></a>
                            <a href="#"><i class="ti-plus"></i></a>
                            <a href="#"><i class="ti-heart"></i></a>
                        </div>
                        <div class="top-tag">
                            <h6> Health </h6>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="d-flex align-item-center justify-content-between"><a href="#">Xeljanz</a>
                            <span>$250</span>
                            <div class="price text-right">
                                <del>$350</del>
                            </div>
                        </h5>
                        <div class="d-flex align-item-center justify-content-between">
                            <a href="#" class="cart-btn btn btn-secondary">cart <i
                                    class="ti-shopping-cart-full"></i></a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class='ti-star'></i>
                                <i class='ti-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{url('frontend/assets/img/product/3.jpg')}}" alt="Images">
                        <div class="product-add">
                            <a href="#"><i class="ti-eye"></i></a>
                            <a href="#"><i class="ti-plus"></i></a>
                            <a href="#"><i class="ti-heart"></i></a>
                        </div>
                        <div class="top-tag">
                            <h6> Health </h6>
                            <div class="ribbon ribbon-color-02"><span>Sold Out</span></div>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="d-flex align-item-center justify-content-between"><a href="#">Tablet</a>
                            <span>$300</span>
                            <div class="price text-right">
                                <del>$450</del>
                            </div>
                        </h5>
                        <div class="d-flex align-item-center justify-content-between">
                            <a href="#" class="cart-btn btn btn-secondary">cart <i
                                    class="ti-shopping-cart-full"></i></a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class='ti-star'></i>
                                <i class='ti-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-card">
                    <div class="product-img">
                        <img src="{{url('frontend/assets/img/product/4.jpg')}}" alt="Images">
                        <div class="product-add">
                            <a href="#"><i class="ti-eye"></i></a>
                            <a href="#"><i class="ti-plus"></i></a>
                            <a href="#"><i class="ti-heart"></i></a>
                        </div>
                        <div class="top-tag">
                            <h6>Health </h6>
                        </div>
                    </div>
                    <div class="content">
                        <h5 class="d-flex align-item-center justify-content-between"><a href="#">Medicine</a>
                            <span>$300</span>
                            <div class="price text-right">
                                <del>$450</del>
                            </div>
                        </h5>
                        <div class="d-flex align-item-center justify-content-between">
                            <a href="#" class="cart-btn btn btn-secondary">cart <i
                                    class="ti-shopping-cart-full"></i></a>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <i class='ti-star'></i>
                                <i class='ti-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
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
