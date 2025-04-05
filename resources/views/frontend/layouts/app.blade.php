<!DOCTYPE html>
<html lang="en">
@include('frontend.layouts.head')


<body class="index-page">
    @include('frontend.layouts.header')
    <main class="main">
        @yield('main-content')
    </main>
    @include('frontend.layouts.footer')
    @include('frontend.layouts.scripts')
</body>

</html>