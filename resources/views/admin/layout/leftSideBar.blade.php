<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                @if (Auth::user()->getRoleNames()=='["admin"]')
                <li class="app-sidebar__heading">Dashboard</li>
                <li>
                    <a href="{{ route('dashboard') }}" class="@yield('Dashboard')">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>
                <li class="app-sidebar__heading">Master</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Items
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="@yield('item')">
                        <li>
                            <a href="{{ route('golongan.index') }}" class="@yield('Golongan')">
                                <i class="metismenu-icon"></i>
                                Golongan
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('mkGol.index') }}" class="@yield('mkGol')">
                                <i class="metismenu-icon"></i>
                                Masa Kerja Golongan
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('jabatan.index') }} " class="@yield('jabatan')">
                                <i class="metismenu-icon"></i>
                                Jabatan
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('pelajaran.index') }}" class="@yield('pelajaran')">
                                <i class="metismenu-icon"></i>
                                Pelajaran
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('guru.index') }}" class="@yield('guru')">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Guru
                    </a>
                </li>
                <li>
                    <a href="{{ route('jadwal.index') }}" class="@yield('jadwal')">
                        <i class="metismenu-icon pe-7s-mouse">
                        </i>Jadwal
                    </a>
                </li>
                <li>
                    <a href="{{ route('siswa.index') }}" class="@yield('siswa')">
                        <i class="metismenu-icon pe-7s-eyedropper">
                        </i>Siswa
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-sun"></i>
                        Ruang
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="@yield('ruang')">
                        <li>
                            <a href="{{ route('kelas.index') }}" class="@yield('kelas')">
                                <i class="metismenu-icon">
                                </i>Kelas
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('kelasDetail.index') }}" class="@yield('kelasDetail')">
                                <i class="metismenu-icon">
                                </i>Kelas Detail
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="{{ route('nilai.index') }}" class="@yield('nilai')">
                <i class="metismenu-icon pe-7s-calculator"></i>
                Nilai
                </a>
                </li> --}}
                {{-- <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-copy-file"></i>
                        Laporan
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul class="@yield('lg') @yield('ls')">
                        <li>
                            <a href="{{ route('laporanGuru') }}" class="@yield('lg')">
                <i class="metismenu-icon"></i>
                Guru
                </a>
                </li>
                <li>
                    <a href="{{ route('laporanSiswa') }}" class="@yield('ls')">
                        <i class="metismenu-icon"></i>
                        Siswa
                    </a>
                </li>
            </ul>
            </li> --}}
            <li>
                <a href="{{ route('User.index') }}" class="@yield('register')">
                    <i class="metismenu-icon pe-7s-print"></i>
                    Registrasi
                </a>
            </li>
            @endif


            {{-- Menu Guru --}}
            @if (Auth::user()->getRoleNames()=='["guru"]')
            <li class="app-sidebar__heading">Dashboard</li>
            <li>
                <a href="{{ url('/guru') }}" class="@yield('Dashboard')">
                    <i class="metismenu-icon pe-7s-rocket"></i>
                    Dashboard
                </a>
            </li>
            <li class="app-sidebar__heading">Master</li>
            <li>
                <a href="{{ route('nilai.index') }}" class="@yield('nilai')">
                    <i class="metismenu-icon pe-7s-calculator"></i>
                    Nilai
                </a>
                <a href="{{ route('cetak') }}" class="@yield('cetak')">
                    <i class="metismenu-icon pe-7s-calculator"></i>
                    Raport
                </a>
            </li>
            @endif


            {{-- Menu Kepsek --}}
            @if (Auth::user()->getRoleNames()=='["kepsek"]')
            <li class="app-sidebar__heading">Dashboard</li>
            <li>
                <a href="{{ url('/kepsek') }}" class="@yield('Dashboard')">
                    <i class="metismenu-icon pe-7s-rocket"></i>
                    Dashboard
                </a>
            </li>
            <li class="app-sidebar__heading">Laporan</li>
            <li>
                <a href="{{ route('laporanSiswa') }}" class="@yield('siswa')">
                    <i class="metismenu-icon pe-7s-eyedropper">
                    </i>Siswa
                </a>
            </li>
            <li>
                <a href="{{ route('laporanGuru') }}" class="@yield('guru')">
                    <i class="metismenu-icon pe-7s-display2"></i>
                    Guru
                </a>
            </li>
            @endif
            </ul>
        </div>
    </div>
</div>
