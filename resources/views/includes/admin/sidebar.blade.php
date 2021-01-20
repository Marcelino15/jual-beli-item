<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('admin') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                @if(session('data')['id_user'] == "admin")
                <div class="sb-sidenav-menu-heading">Admin</div>
                <a class="nav-link" href="{{route('list-admin')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-lock"></i></div>
                    Admin
                </a>
                <a class="nav-link" href="{{ route('list-penjual') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    Penjual
                </a>
                <a class="nav-link" href="{{route('list-pembeli')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>
                    Pembeli
                </a>
                @else
                <div class="sb-sidenav-menu-heading">Penjual</div>
                <a class="nav-link" href="{{route('barang-list')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                    Barang
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="register.html">Register</a>
                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                        </div>
                    </nav>
                </div>
                @endif
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{session('data')['nama']}}
        </div>
    </nav>
</div>