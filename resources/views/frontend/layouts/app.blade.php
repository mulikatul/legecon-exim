<!DOCTYPE html>
<html lang="en">
@include('frontend.layouts.head')


<body class="index-page">
    @include('frontend.layouts.header')
    @yield('main-content')
    @include('frontend.layouts.footer')
    @include('frontend.layouts.scripts')
</body>

</html>