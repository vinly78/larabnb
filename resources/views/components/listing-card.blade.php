@props(['title', 'price', 'image', 'detailsUrl'])

<div class="item">
    <a href="{{ $detailsUrl }}" style="text-decoration: none; color: inherit">
        <img src="{{ $image }}" alt="{{ $title }}">
        <div class="item-content">
            <b>{{ $title }}</b><br>
            ${{ $price }} / night
        </div>
    </a>
</div>

