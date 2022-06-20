@extends('layouts/main', [
    'title' => 'About us',
    'current_page' => 'about-us'
])

@section('stylesheets')
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about-us.css">
@endsection

  
@section('content')
    <h1>About us</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, aperiam!</p>
@endsection