<?php

namespace App\View\Components;

use Closure;
use App\Models\Activity;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActivityData extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Activity $activity
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.activity-data');
    }
}
