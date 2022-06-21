
@php
$links = [
    'homepage' => 'Home',
    'about-us' => 'About us',
    'create' => "Create",
    'create-book' => "Create Book"

];
@endphp



<nav>
    @foreach ($links as $route => $label)

        @if ($current_page == $route)
            <span>{{ $label }}</span>
        @else
            <a href="{{ route($route) }}">{{ $label }}</a>
            
        @endif

    @endforeach
</nav>