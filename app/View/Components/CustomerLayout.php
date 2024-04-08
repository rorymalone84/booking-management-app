<?php

namespace App\View\Components;

use Mary\Traits\Toast;
use Illuminate\View\View;
use Illuminate\View\Component;

class CustomerLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.customer');
    }
}