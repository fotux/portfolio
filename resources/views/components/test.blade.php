    @foreach ($reviews as $review)
        <div>
            <h1>{{ $review->name }}</h1>
            <h2>{{ $review->review }}</h2>
            <p>Rating: {{ $review->rating }}</p>
        </div>
    @endforeach
