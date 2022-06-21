
@php
$links = [
    'homepage' => 'Home',
    'about-us' => 'About us',
    'create' => "Create",
    'create-book' => "Create Book",
    'register' => "Register",
    'login' => "Login"

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

    {{-- auth directive --}}
    @auth
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button>Logout</button>
    </form>
    @else
    <a href="{{route('login')}}">LOGIN</a>
    @endauth
    
    @guest
    <a href="{{route('register')}}">Register</a>
    @endguest

    

</nav>