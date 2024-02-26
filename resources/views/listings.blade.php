<h1>Listings</h1>
<p>{{ $heading }}</p>
<ul>
    @unless(count($posts))
        <p>No posts found</p>
    @else
        @foreach ($posts as $post)
            <li>
                <a href="/posts/{{ $post['id'] }}">{{ $post['title'] }}</a>
            </li>
        @endforeach
    @endunless
</ul>