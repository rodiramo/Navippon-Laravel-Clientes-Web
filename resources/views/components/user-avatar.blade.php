<?php
use Illuminate\Support\Facades\Storage;
/** @var \App\Models\User $user */
?>

<img class="mw-100" src="{{ Storage::url('imgs/' . $user->avatar) }}" alt="{{ $user->name }}'s Profile Picture">
