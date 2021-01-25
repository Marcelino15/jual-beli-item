<header class="header">
    <nav class="">
        <!-- Mobile -->
        <div class="nav-header right">
            {{-- <a href="./home.html" class="brand d-lg-none d-block">
                <img src="assets/img/logo/logo.png" alt="">
            </a>
            <button class="toggle-bar"><span class="fa fa-bars"></span></button> --}}
        </div>
        <div class="header-btn">
            <a href="{{ url('/') }}" class="btn btn-secondary">
                <i class="fas fa-list"></i><span>Toko Item</span></a>
            @if (Auth::user()==null)
                <a href="./login" class="btn btn-secondary">
                    <i class="fas fa-lock"></i><span>Masuk</span>
                </a>
            @else
            <a href="{{ url('/tampil-keranjang/') }}" class="btn btn-secondary">
                <i class="fas fa-shopping-cart "></i><span>Keranjang (
                <?php
                    $cart=session('cart');
                    if($cart==null)
                    {
                        echo "0";
                    }
                    else {
                        echo count($cart);
                    }
                ?>
                )
                </span></a>
                <a href="{{ url('/logout') }}" class="btn btn-secondary">
                    <i class="fas fa-lock"></i><span>Keluar ({{ Auth::user()->name }})</span>
                </a>
            @endif
            
               
        </div>
        <!-- Mobile -->
        {{-- <ul class="menu">
            <li class="active">
                <a href="{{ url('/') }}">TOKO ITEMS</a>
            </li>
        </ul> --}}
    </nav>
</header>
<!-- Header End -->
