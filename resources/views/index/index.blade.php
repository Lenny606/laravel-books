@extends('layouts/main', [
    'current_page' => 'homepage'
])

@section('stylesheets')
    <link rel="stylesheet" href="style.css">
@endsection

@section('content')

<h1>Bookstore</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, sed?</p>
@include('layouts/authors')
@endsection

