@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="listing-header">
            <h1>{{ $property['title'] }}</h1>
            <p>📍 Claraburgh, Tunisia ⭐ New Listing 👤 Hosted by Test User</p>
        </div>
    </div>

    <div class="gallery">
        <div class="main-photo">Main Photo</div>
        <div>Bedroom</div>
        <div>Bathroom</div>
        <div>Kitchen</div>
        <div>View</div>
    </div>

    <div class="content">
        <div class="left">
            <h2>About this space</h2>
            <p>🛏️6 Bedrooms 🚿 2 Bathrooms</p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non aspernatur nobis perferendis vitae.
                Sit hic impedit totam, fugiat minus ducimus explicabo fugit inventore exercitationem distinctio?
                Quasi hic at optio id?
            </p>
        </div>

        <div class="booking-card">
            <div class="price-header">
                <span class="price">${{ $property['price'] }}</span>
                <span class="per-night">/ night</span>
            </div>

            <div class="date-selector">
                <div class="date-input-group">
                    <label>CHECK-IN</label>
                    <input type="date">
                </div>
                <div class="date-input-group">
                    <label>CHECK-OUT</label>
                    <input type="date">
                </div>
            </div>

            <button class="reserve-btn">Reserve Now</button>
            <p style="text-align: center;">You won't be charged yet</p>
        </div>
    </div>
@endsection