@include('layouts.partials.header')

<body style="background-color: #def2f1; color: #17252a;">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            @include('layouts.partials.sidebar')
        </div>
    </div>
    <div id="main">
        <header class="mb-5">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading mb-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="mt-1">{{ $page_heading }}</h3>
                </div>
            </div>
        </div>

        <div class="page-content">
            @yield('contents')
        </div>
        <div class="" style="align-items: center; justify-content: center;">
            @include('layouts.partials.footer')
        </div>