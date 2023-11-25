<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Category;
use App\Models\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::with(['categories'])->get();

        return view('restaurant.index', ['restaurants' => $restaurants]);
    }

    public function view(int $id)
    {
        $restaurant = Restaurant::findOrFail($id);

        return view('restaurant.view', ['restaurant' => $restaurant]);
    }

    public function formNew()
    {
        return view('restaurant.form-new', [
            'categories' => Category::orderBy('name')->get(),
        ]);
    }

    public function processNew(Request $request)
    {
        $data = $request->except(['_token']);

        $request->validate(Restaurant::validationRules(), Restaurant::validationMessages());

        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadImage($request);
        }

        try {
            DB::transaction(function () use ($data) {
                $restaurant = Restaurant::create($data);
                $restaurant->categories()->attach($data['category_id'] ?? []);
            });

            return redirect()
                ->route('restaurants.index')
                ->with('message.success', 'The restaurant <b>' . e($data['name']) . '</b> was successfully added!');
        } catch (\Exception $e) {
            return redirect()
                ->route('restaurants.formNew')
                ->withInput()
                ->with('message.error', 'The restaurant <b>' . e($data['name']) . '</b> could not be saved. Please try again.')
                ->with('message.type', 'danger');
        }
    }

    public function formUpdate(int $id)
    {
        return view('restaurant.form-update', [
            'restaurant' => Restaurant::findOrFail($id),
            'categories' => Category::orderBy('name')->get(),
        ]);
    }

    public function processUpdate(Request $request, int $id)
    {
        $restaurant = Restaurant::findOrFail($id);

        $request->validate(Restaurant::validationRules(), Restaurant::validationMessages());

        $data = $request->except(['_token']);

        if ($request->hasFile('cover')) {
            $data['cover'] = $this->uploadCover($request);
        }

        try {
            DB::transaction(function () use ($restaurant, $data) {
                $restaurant->update($data);
                $restaurant->categories()->sync($data['category_id'] ?? []);
            });
        } catch (\Exception $e) {
            return redirect()
                ->route('restaurants.formUpdate', ['id' => $id])
                ->withInput()
                ->with('message.error', 'The Restaurant <b>' . e($data['name']) . '</b> could not be updated. Please try again later.')
                ->with('message.type', 'danger');
        }

        return redirect()
            ->route('restaurants.index')
            ->with('message.success', 'The restaurant <b>' . e($restaurant->name) . '</b> was successfully edited.');
    }

    public function confirmDelete(int $id)
    {
        return view('restaurant.delete', [
            'restaurant' => Restaurant::findOrFail($id),
        ]);
    }

    public function processDelete(int $id)
    {
        $restaurant = Restaurant::findOrFail($id);

        try {
            DB::transaction(function () use ($restaurant) {
                $restaurant->categories()->detach();
                $restaurant->delete();
            });
        } catch (\Exception $e) {
            return redirect()
                ->route('restaurants.confirmDelete', ['id' => $id])
                ->withInput()
                ->with('message.error', 'The Restaurant <b>' . e($restaurant->name) . '</b> could not be deleted. Please try again later.')
                ->with('message.type', 'danger');
        }

        return redirect()
            ->route('restaurants.index')
            ->with('message.success', 'The restaurant <b>' . e($restaurant->name) . '</b> was successfully deleted.');
    }

    public function showNewestRestaurants()
    {
        $restaurant = Restaurant::latest()->first();
        return view('home', ['restaurant' => $restaurant]);
    }

    /**
     * Upload restaurant image and return the file name.
     *
     * @param Request $request
     * @return string
     */
    protected function uploadImage(Request $request): string
    {
        $image = $request->file('image');
        $name = $request->input('name');
        $imageName = date('YmdHis_') . \Str::slug($name) . "." . $image->guessExtension();
        $image->storeAs('imgs', $imageName);

        return $imageName;
    }
}
