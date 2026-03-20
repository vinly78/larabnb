@extends('layouts.app')

@section('content')
    <div class="explore">
        <h2>Explore Stays</h2>
        <p>Book unique places to stay and things to do.</p>

        <div class="grid">
            @foreach($properties as $p)
                <x-listing-card
                    :title="$p['title']"
                    :price="$p['price']"
                    :image="$p['image']"
                    :details-url="route('properties.show', $p['id'])"
                />
            @endforeach
        </div>
    </div>
@endsection