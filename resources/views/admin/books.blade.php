
<ul>

    @foreach ($authors as $author)
    <li>{{$author->name}}</li>
    @endforeach
</ul>
<h1>Latest books</h1>
    <p class="loader">LOADING</p>
    
<ul id="latest-books">

    <script src="{{mix('js/latest-books.js')}}"></script>
</ul>