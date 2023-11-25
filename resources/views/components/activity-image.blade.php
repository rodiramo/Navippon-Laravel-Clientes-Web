<?php
use Illuminate\Support\Facades\Storage;
/** @var \App\Models\Activity $activity */
?>

@if ($activity->image !== null && Storage::exists('imgs/' . $activity->image))
    <img class="mw-100" src="{{ Storage::url('imgs/' . $activity->image) }}" alt="{{ $activity->image_description }}">
@else
    <img class="mw-100" src="{{ url('img/no_image_available.jpg') }}" alt="no image available image">
@endif
