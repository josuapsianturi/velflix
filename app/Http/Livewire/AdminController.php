<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminController extends Component
{
    /**
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function render()
    {
        return view('livewire.admin-controller');
    }
}
