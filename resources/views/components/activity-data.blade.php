<?php
/** @var \App\Models\Activity $activity */
?>
<div>
    <div>
        <x-activity-image :activity="$activity" />
    </div>

    <dl class="mb-3">
        <dt>Date</dt>
        <dd>{{ $activity->date }}</dd>
        @foreach ($activity->categories as $category)
            <span class="badge bg-secondary">{{ $category->name }}</span>
        @endforeach
        <dt>Budget</dt>
        <dd>{{ $activity->budget->name }}</dd>

    </dl>

    <h3 class="mb-3">Description</h3>
    <p>{{ $activity->description }}</p>
    <a href="#" class="button-35">Add To Favourites</a>
</div>
