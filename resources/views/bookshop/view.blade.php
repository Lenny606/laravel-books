@extends("layouts/main", [
    'title' => 'Bookshop',
    'current_page' => 'bookshop'
])

@section('content')

<h1>Bookshop</h1>

<h2>{{$bookshop->name}}</h2>
<h3>{{$bookshop->city}}</h3>

<p><em>List of books:</em></p>

   
   
    
@if(($bookshop->books->isEmpty())) 
    <p>There are no books in bookshop, sorry...</p>
@else 
<ul>
@foreach ($bookshop->books as $book)

    <li>{{$book->title}}</li>
    @endforeach
</ul>
@endif

@endsection