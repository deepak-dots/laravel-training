<!doctype html>
<html>
<head>
   @include('admin.includes.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="container">
            <header class="row">
                @include('admin.includes.header')
                @include('admin.includes.sidebar');
            </header>
            <div id="main" class="row">
                    @yield('content')
            </div>
            <footer class="row">
                @include('admin.includes.footer')
            </footer>
        </div>
    </div>
</body>
</html>