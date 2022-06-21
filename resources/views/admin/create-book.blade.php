@extends("layouts/main", [
    'title' => 'Create-Book',
    'current_page' => 'create-book'
])

@section('content')

<h1>Create</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, aperiam!</p>

<form action="/admin/books/save" method="post">
    @csrf
    Title
    <input type="text" name="title">
    Language
    <input type="text" name="language">
    
    <input type="hidden" name="slug">

    <input type="submit" value="Create">
    
</form>

@if (Session::has('success_message'))
     
<div class="alert alert-success">
    {{ Session::get('success_message') }}
</div>

@endif

@endsection