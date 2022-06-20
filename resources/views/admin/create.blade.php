@extends("layouts/main", [
    'title' => 'Create',
    'current_page' => 'create'
])

@section('content')

<h1>Create</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, aperiam!</p>

<form action="/admin/authors/save" method="post">
    @csrf
    Name
    <input type="text" name="name">
    Bio
    <input type="text" name="bio">
    
    <input type="hidden" name="slug">

    <input type="submit">
    
</form>

@if (Session::has('success_message'))
     
<div class="alert alert-success">
    {{ Session::get('success_message') }}
</div>

@endif

@endsection

