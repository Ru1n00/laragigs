@extends('layout')
@section('content')
    <!-- Search -->
    @include('partials._search')
    
    @if ($listing)
        {{ $listing['id'] }}
        {{ $listing['title'] }}
        {{ $listing['content'] }}
    @else
        <p>post not found</p>
    @endif
@endsection