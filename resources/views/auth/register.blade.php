@extends("layouts/main", [
    'title' => 'Register',
    'current_page' => 'register'
])

@section('content')

<h1>Register</h1>
    <p>Without registration you cannot continue further !</p>

    {{-- validation here --}}


    <form action="{{ route('register') }}" method="post">
 
        @csrf
     <label for="">Name</label><br>   
        <input type="text" name="name" value="{{ old('name') }}"><br>
     <label for="">Email</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br>
     <label for="">Password</label><br>
        <input type="password" name="password" value=""><br>
     <label for="">Password Confirmation</label><br>
        <input type="password" name="password_confirmation" value=""><br>
     
        <button>Register</button>
     
    </form>
@endsection