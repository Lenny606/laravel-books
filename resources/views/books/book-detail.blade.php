@extends("layouts/main", [
    'title' => 'Login',
    'current_page' => 'login'
])

@section('content')

<h1>Detail</h1>

<p><strong>{{$detail->title}}</strong></p>
<img src="{{$detail->image}}">
<p>{{$detail->publication_date}}</p>
<p>{{$detail->format}}</p>

@auth

<form action="/book/{{$detail->id}}/review" method="post">
    @csrf
    Short review:
    <input type="text" name="text">
    <input type="hidden" name="book_id" value="{{intval($detail->id)}}">
    
    <input type="submit" value="Send review">
    
</form>

@endauth

@endsection    