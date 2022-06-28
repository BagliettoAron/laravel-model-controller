<h1>Movies:</h1>

{{-- {{dd($movies)}} --}}

<ul>
    @foreach ($movies as $movie)
    <li>
        <h3>{{$movie['original_title']}}</h3>
    </li>
    @endforeach
</ul>

