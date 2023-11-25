<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function showCategory($id)
    {
        $category = Category::findOrFail($id);

        $restaurants = $category->restaurants;
        $activities = $category->activities;

        return view('categories.show', compact('category', 'restaurants', 'activities'));
    }
}
