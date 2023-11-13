<!DOCTYPE html>
<html>
<head>
    <title>My Laravel Site</title>
    <!-- Include your external CSS file here -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('layouts.partials.navbar')

    <div class="container">

        @include('layouts.partials.sidebar')

        <div class="content">
            @yield('content')
        </div>
        
    </div>

    @include('layouts.partials.footer')
</body>
</html>