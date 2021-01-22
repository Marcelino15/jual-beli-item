<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                @if(session('data')['level'] == "admin")
                <a class="nav-link" href="{{ route('admin') }}">
                @else
                <a class="nav-link" href="{{ route('penjual') }}">
                @endif
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                @if(session('data')['level'] == "admin")
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
                <a class="nav-link" href="#">
                    <div class="sb-nav-link-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                    Transaksi
                </a>
                @endif
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{session('data')['nama']}}
        </div>
    </nav>
</div>