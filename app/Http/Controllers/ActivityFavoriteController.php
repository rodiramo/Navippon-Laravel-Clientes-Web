<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ActivityFavorite;

class ActivityFavoriteController extends Controller
{
    public function processFavorite(Request $request, int $id)
    {
        $activity = Activity::findOrFail($id);

        if (!auth()->check()) {
            return redirect()->route('login')->with('message.error', 'Please log in to Favorite an activity.');
        }

        $userId = auth()->id();

        if ($userId) {
            ActivityFavorite::create([
                'user_id' => $userId,
                'activity_id' => $activity->activity_id,
            ]);


            $favorites = ActivityFavorite::where('user_id', $userId)->get();

            return redirect()
                ->route('profile')
                ->with('message.success', 'The favoriting of <b>' . $activity->title . '</b> was successful.')
                ->with('favorites', $favorites);
        } else {
            return redirect()->route('login')->with('message.error', 'Please log in to Favorite an activity.');
        }
    }

    public function confirmDelete(int $favoriteId)
    {
        $userId = auth()->id();

        try {
            $favorite = ActivityFavorite::where('user_id', $userId)
                ->where('id', $favoriteId)
                ->with('activity')
                ->firstOrFail();

            return view('profile.delete', compact('Favorite'));
        } catch (\Exception $e) {
            \Log::error('Error confirming deletion: ' . $e->getMessage());

            return redirect()
                ->route('profile')
                ->with('message.error', 'An error occurred. Please try again later.')
                ->with('message.type', 'danger');
        }
    }

    public function processDelete(Request $request, int $favoriteId)
    {
        $userId = auth()->id();

        try {
            $favorite = ActivityFavorite::where('user_id', $userId)
                ->where('id', $favoriteId)
                ->firstOrFail();

            $activityTitle = $favorite->activity->title;

            $favorite->delete();

            return redirect()
                ->route('profile')
                ->with('message.success', 'Favorite for <b>' . $activityTitle . '</b> has been successfully removed.');
        } catch (\Exception $e) {
            \Log::error('Error deleting Favorite: ' . $e->getMessage());

            return redirect()
                ->route('profile')
                ->with('message.error', 'An error occurred while removing the Favorite. Please try again later.')
                ->with('message.type', 'danger');
        }
    }
}
