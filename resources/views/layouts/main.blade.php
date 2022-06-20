<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
{{-- contains nav bar in saparete folder --}}
@include('common/navigation', [
    'current_page' => $current_page ?? null
])

        {{-- content text --}}
    @yield('content')
    @yield('about')
    
</div>
</body>
</html>