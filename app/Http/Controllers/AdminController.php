<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ActivityFavorite;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function userList()
    {
        $users = User::all();

        return view('admin.userlist', ['users' => $users]);
    }

    public function viewUserFavoritesActivities($userId)
    {
        $user = User::findOrFail($userId);
        $favorites = ActivityFavorite::where('user_id', $user->user_id)->get();

        return view('admin.favoriteActivitiesList', ['user' => $user, 'favorites' => $favorites]);
    }
}
