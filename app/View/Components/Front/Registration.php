<?php

namespace App\View\Components\Front;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Polyclinic;
use App\Models\Doctor;

class Registration extends Component
{
    public $polyclinics;
    public $doctors;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->polyclinics = Polyclinic::get();
        $this->doctors = Doctor::get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.registration', [
            'polyclinics' => $this->polyclinics,
            'doctors' => $this->doctors
        ]);
    }
}
