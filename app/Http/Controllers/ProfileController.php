<?php

namespace App\Http\Controllers;

use App\Models\ActivityFavorite;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = auth()->user();
        $favorites = ActivityFavorite::where('user_id', $user->user_id)->get();

        return view('profile.profile', compact('user', 'favorites'));
    }

    public function edit(int $id)
    {
        $user = User::findOrFail($id);
        return view('profile.update', [
            'user' => $user
        ]);
    }

    public function update(Request $request, int $id)
    {

        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except(['_token']);

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $this->uploadAvatar($request);
        }

        try {
            DB::transaction(function () use ($user, $data) {
                $user->update($data);
            });
        } catch (\Exception $e) {
            \Log::error('Error updating user profile: ' . $e->getMessage());
            return redirect()
                ->route('profile.edit')
                ->with('message.error', 'An error occurred while updating the profile. Please try again later.')
                ->with('message.type', 'danger');
        }

        return redirect()
            ->route('profile')
            ->with('message.success', 'Profile updated successfully.');
    }

    /**
     * Upload avatar image and return the file name.
     *
     * @param Request $request
     * @return string
     */
    protected function uploadAvatar(Request $request): string
    {
        $avatar = $request->file('avatar');
        $title = $request->input('title');

        $avatarName = date('YmdHis_') . \Str::slug($title) . "." . $avatar->guessExtension();

        $avatar->storeAs('imgs', $avatarName);

        return $avatarName;
    }
}
