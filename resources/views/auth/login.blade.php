@extends("layouts/main", [
    'title' => 'Login',
    'current_page' => 'login'
])

@section('content')

<h1>Login</h1>
    <p>Without login you cannot continue further !</p>

    {{-- validation here --}}

    {{-- validation here --}}   

    <form action="{{ route('login') }}" method="post">
 
        @csrf
     
     <label for="">Email</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br>
     <label for="">Password</label><br>
        <input type="password" name="password" value=""><br>
       
        <button>Login</button>
     
    </form>
@endsection