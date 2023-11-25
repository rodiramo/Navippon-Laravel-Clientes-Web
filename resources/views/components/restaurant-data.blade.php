<?php
/** @var \App\Models\Restaurant $restaurant */
?>


<div>

    <p>{{ $restaurant->budget }}</p>
    <div>
        <x-restaurant-image :restaurant="$restaurant" />

    </div>

    <dl>
        <dt>Genres</dt>
        <dd>
            @foreach ($restaurant->categories as $category)
                <span class="badge bg-secondary">{{ $category->name }}</span>
            @endforeach
        </dd>
    </dl>

    <h3>Description</h3>

    <p>{{ $restaurant->description }}</p>


    <a class="button-35">Add to Favourites</a>

</div>
