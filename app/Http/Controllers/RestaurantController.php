<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Category;
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
                ->route('restaurant.index')
                ->with('message.success', 'The restaurant <b>' . e($data['name']) . '</b> was successfully added!');
        } catch (\Exception $e) {
            return redirect()
                ->route('restaurant.formNew')
                ->withInput()
                ->with('message.error', 'The restaurant <b>' . e($data['name']) . '</b> could not be saved. Please try again.')
                ->with('message.type', 'danger');
        }
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
