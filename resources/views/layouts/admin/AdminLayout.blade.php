<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    {{-- Roboto   --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js', 'resources/js/my.js'])
    @vite(['resources/js/dark-mode.js', 'resources/js/constants.js'])
    <script src="{{ asset('assets/ckeditor/build/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/ckeditor/build/ckeditor.js.map') }}"></script>
    <script src="{{ asset('assets/ckeditor/src/ckeditor.js') }}"></script>
    {{-- <script src="{{ asset('assets/webpack.config.js') }}"></script> --}}

    {{-- @vite(['resources/js/index.js','resources/js/constants.js']) --}}
    <!-- Styles -->
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="icon" type="image/png" href="/favicon.ico">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff"> --}}
</head>

<body>
    @include('admin.partials.main_navbar')
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        @include('admin.partials.side_navbar')
        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-0 lg:ml-64 dark:bg-gray-900">
            <main>
                @yield('content')
                {{-- {{ $slot }} --}}
                {{-- @include('admin.pages.main') --}}
            </main>
            @include('admin.partials.footer')

        </div>


        {{-- @section('content')
            <h1 class="text-2xl font-bold">Dashboard</h1>
            <p>Welcome to your dashboard!</p>
        @endsection --}}
    </div>
    {{-- @section('scripts') --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/extm.min.js') }}"></script>
    <script src="{{ asset('assets/js/my.js') }}"></script>
    <script src="{{ asset('assets/js/product.js') }}"></script>
    {{-- @endsection --}}

</body>

</html>
