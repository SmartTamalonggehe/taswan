@include('admin.layout.header')
@yield('skrip')
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('admin.layout.head')
        {{-- @include('admin.layout.setting') --}}
        <div class="app-main">
            @include('admin.layout.leftSideBar')
                <div class="app-main__outer">
                    @yield('content')
                    @include('admin.layout.footer')
        </div>
    </div>
    @include('admin.layout.script')
    @yield('skrip')
</body>
</html>
