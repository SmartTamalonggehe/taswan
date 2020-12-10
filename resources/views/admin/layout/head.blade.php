<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
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
    <div class="app-header__content">
        <div class="app-header-right">
            {{-- <div class="search-wrapper">
                <div class="input-holder">
                    <input type="text" class="search-input" placeholder="Type to search">
                    <button class="search-icon"><span></span></button>
                </div>
                <button class="close"></button>
            </div> --}}
        </div><h4 style="text-align:center;color:royalblue;">Sistem Informasi Akademik Sekolah Dasar Negeri Inpres Waena</h4>
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img width="42" class="rounded-circle" src="{{ asset('assets/images/avatars1.png') }}" alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        <button type="submit" tabindex="0" class="dropdown-item">Logout</button>
                                        @csrf
                                    </form>

                                </div>
                            </div>
                        </div>
                        
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                {{ Auth::user()->guru->nm_guru }}
                            </div>
                            @if (Auth::user()->getRoleNames()=='["admin"]')
                                <div class="widget-subheading">
                                    Admin
                                </div>
                            @endif
                            @if (Auth::user()->getRoleNames()=='["guru"]')
                                <div class="widget-subheading">
                                    Guru
                                </div>
                            @endif
                            @if (Auth::user()->getRoleNames()=='["kepsek"]')
                                <div class="widget-subheading">
                                    Kepsek
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
