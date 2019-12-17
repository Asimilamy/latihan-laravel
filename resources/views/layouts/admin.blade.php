<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.admin.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('components.admin.header')
        @include('components.admin.sidebar')
        {{-- Start Content --}}
        <div class="content-wrapper" style="min-height: 1048px;">
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <section class="content">
                @yield('content')
            </section>
        </div>
        {{-- End Content --}}
        @include('components.admin.footer')
        @include('components.admin.control-sidebar')
    </div>

    @section('page-js')
        @include('components.admin.page-js')
    @show
</body>
</html>