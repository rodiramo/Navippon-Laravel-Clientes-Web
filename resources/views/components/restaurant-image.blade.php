<?php
use Illuminate\Support\Facades\Storage;
/** @var \App\Models\Restaurant $restaurant */
?>

@if ($restaurant->image !== null && Storage::exists('imgs/' . $restaurant->image))
    <img class="image" src="{{ Storage::url('imgs/' . $restaurant->image) }}" alt="{{ $restaurant->image_description }}">
@else
    <img class="image" src="{{ url('img/no_image_available.jpg') }}" alt="no image available image">
@endif
