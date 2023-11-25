<?php

namespace App\View\Components;

use Closure;
use App\Models\Restaurant;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RestaurantData extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Restaurant $restaurant
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.restaurant-data');
    }
}
