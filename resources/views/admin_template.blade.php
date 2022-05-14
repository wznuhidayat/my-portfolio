<!doctype html>
<html class="scroll-smooth">

@include('admin/partials/head')

<body >
    <div id="app">
        @include('admin/partials/sidebar')
        <div id="main" class="layout-navbar">
        @include('admin/partials/navbar')
        @yield('container')
        </div>
        {{-- @include('admin/partials/footer') --}}
    </div>
    @include('admin/partials/js')
</body>



</html>