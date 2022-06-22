@extends('layouts/main', [
    'current_page' => 'homepage'
])

@section('scripts')
    <script src="{{ mix('js/latest-books.js') }}" defer></script>
@endsection

{{-- @section('stylesheets')
    <link rel="stylesheet" href="style.css">
@endsection --}}

@section('content')

<h1>Bookstore</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, sed?</p>

@endsection

