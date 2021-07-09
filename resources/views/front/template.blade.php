<!DOCTYPE html>
<html lang="en">

@include('front.header')
<body>
    <div id="dispar-wrap">
@include('front.navbar')

<main>
    @yield('main')
</main>

@include('front.footer')
</div>

@include('front.scripts')
</body>
</html>