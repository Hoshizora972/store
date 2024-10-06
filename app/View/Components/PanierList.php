<?php

namespace App\View\Components;

use Closure;
use App\Models\Panier;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class PanierList extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $paniers=Panier::where('user_id',auth()->user()->id)->get();
        return view('components.panier-list',compact('paniers'));
    }
}
