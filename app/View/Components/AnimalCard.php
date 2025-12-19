<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Animal;

class AnimalCard extends Component
{
    public $animal;

    // On injecte l'animal dans le constructeur
    public function __construct(Animal $animal)
    {
        $this->animal = $animal;
    }

    public function render()
    {
        return view('components.animal-card');
    }
}