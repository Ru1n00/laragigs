@if (count($listing) > 0)
    {{ $listing['id'] }}
    {{ $listing['title'] }}
    {{ $listing['content'] }}
@else
    <p>post not found</p>
@endif