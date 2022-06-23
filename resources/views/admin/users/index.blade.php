@extends("layouts/main", [
    'title' => 'Users',
    'current_page' => 'users'
])

@section('content')

<h1>List of users</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, deleniti.</p>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root"></div>
    {{-- react code --}}
    <script src="{{ mix('js/users.js') }}"></script>
@endsection