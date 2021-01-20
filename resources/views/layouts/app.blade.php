<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>KUKUS ITEMS - "ENJOY YOUR BATTLE"</title>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @include('includes.style')
    </head>
    
    <body>
    

        @include('includes.navbar')

        <!-- Shop PAGE BANNER -->

        <div class="page-banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-banner-content">
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <div class="title">
                                    <h6 class="text-left text-capitalized">Shop Page</h6>
                                    <h2>Our Shop</h2>
                                </div>
                                <div class="link text-sm-right text-left">
                                    <a href="./home.html">Home <i class="ti-angle-double-right"></i></a>
                                    Shop
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Shop PAGE BANNER  END-->

        @yield('content')

        @include('includes.footer')

        <!-- FOOTER END -->

        @include('includes.script')

    </body>

</html>