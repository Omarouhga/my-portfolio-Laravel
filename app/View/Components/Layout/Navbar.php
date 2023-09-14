<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public array $navigationItems=[];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->navigationItems = [
            ['label' => 'A propos', 'href' => '#about'],
            ['label' => 'Education', 'href' => '#education' ],
            ['label' => 'experience', 'href' => '#experience' ],
            ['label' => 'Mes projets', 'href' => '#portfolio'],
            ['label' => 'Ma formation', 'href' => '#formation'],
            ['label' => 'Contact', 'href' => '#contact'],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layout.navbar');
    }
}
