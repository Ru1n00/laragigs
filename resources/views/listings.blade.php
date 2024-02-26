<h1>Listings</h1>
<p>{{ $heading }}</p>
<ul>
    @unless(count($listings))
        <p>No posts found</p>
    @else
        @foreach ($listings as $listing)
            <li>
                <a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
            </li>
        @endforeach
    @endunless
</ul>