<!-- header -->
<div class="navigasi">
    <div class="penutup"></div>
    <header>
        <div class="logo">
            <a href="#" class="dlogo"><img src="/images/Logo/Gramtype Light.png" alt=""></a>
            <a href="#" class="mlogo"><img src="/images/Logo/Logotype Light.png" alt=""></a>
        </div>

        <ul class="navlist">
            <li class="{{ Request::is('/') ? 'aktif' : '' }}"><a href="{{ route('homePage')}}">Beranda</a></li>
            <li class="{{ Request::is('jenis') ? 'aktif' : '' }}"><a href="{{ route('jenisPage')}}">Jenis</a></li>
            <li class="{{ Request::is('dashboard*') ? 'aktif' : '' }}"><a href="{{ route('dashboard.index')}}">Dashboard</a></li>
            <li class="{{ Request::is('tentang') ? 'aktif' : '' }}"><a href="{{ route('tentangPage')}}">Tentang</a></li>
        </ul>

        <div class="burger-menu">
            <ion-icon name="menu-outline"></ion-icon>
        </div>

        <div class="nav-mobile">
            <ul class="navlist-mobile">
                <li class="{{ Request::is('/') ? 'aktif' : '' }}"><a href="{{ route('homePage')}}">Beranda</a></li>
                <li class="{{ Request::is('jenis') ? 'aktif' : '' }}"><a href="{{ route('jenisPage')}}">Jenis</a></li>
                <li class="{{ Request::is('dashboard*') ? 'aktif' : '' }}"><a href="{{ route('dashboard.index')}}">Dashboard</a></li>
                <li class="{{ Request::is('tentang') ? 'aktif' : '' }}"><a href="{{ route('tentangPage')}}">Tentang</a></li>
            </ul>
        </div>
    </header>
</div>