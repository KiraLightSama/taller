<!DOCTYPE html>
<html lang="es">

    @include('admin.head')

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <div id="app">
        @include('admin.header')
    
        <div class="app-body">
            @include('admin.sidebar')
            @yield('content')
        </div>
    </div>
    @include ('admin.footer')
    @include ('admin.script')
</body>

</html>