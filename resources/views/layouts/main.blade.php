@include('layouts.partials.header')

<body style="background-color: #def2f1; color: #17252a;">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            @include('layouts.partials.sidebar')
        </div>
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>{{ $page_heading }}</h3>
        </div>

        <div class="page-content">
            @yield('contents')
        </div>
        @include('layouts.partials.footer')