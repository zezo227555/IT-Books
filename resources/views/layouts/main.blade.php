<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>

    @include('includes.header')

    @include('includes.sidebar')

    <main id="main" class="main rtl">



        @session('success')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session('success') }}
            </div>
        @endsession

        @yield('content')

    </main>

    @yield('modals')

    @include('includes.footer')

    @include('includes.foot')

</body>

</html>
