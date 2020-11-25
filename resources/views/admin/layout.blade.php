<html lang="en" style="height: auto;">
    <head>
        {{-- header --}}
        @include('admin.component.head')
    </head>
    <body class="sidebar-mini" style="height: auto;">
        <div class="wrapper">
            <!-- Navbar -->
            @include('admin.component.main-header')
            <!-- Main Sidebar Container -->
            @include('admin.component.main-sidebar')
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="min-height: 855px;">
                {{-- view --}}
                @yield('content')
            </div>
            <!-- Main Footer -->
            @include('admin.component.footer')
        </div>
        {{-- script --}}
        @include('admin.component.script')
    </body>
</html>