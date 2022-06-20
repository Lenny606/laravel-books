<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{!empty($title) ? $title . ' | ' : ''}} Bookshop</title>

    
    {{-- relative path to the folder --}}
    <link rel="stylesheet" href="{{mix('css/app.css')}}">

    {{-- styles and js as part of the template --}}
    @yield('stylesheets')
    @yield('scripts')

</head>
<body>
    
    {{-- contains nav bar in saparate folder and includes here --}}
    @include('common/navigation', [
    'current_page' => $current_page ?? null
    ])

        {{-- content text on multiple pages--}}
    @yield('content')
    
    
</div>
</body>
</html>