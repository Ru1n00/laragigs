@if ($listing)
    {{ $listing['id'] }}
    {{ $listing['title'] }}
    {{ $listing['content'] }}
@else
    <p>post not found</p>
@endif