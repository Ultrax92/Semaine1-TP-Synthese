<?php

namespace App\Http\Controllers;

use App\Models\Animal;

class AnimalController extends Controller
{
    // Voir la fiche d'un animal
    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return view('show', compact('animal'));
    }

    // Ajouter Coquillette
    public function create()
    {
        Animal::create([
            'name' => 'Coquillette',
            'species' => 'Chien',
            'age' => 3,
            'description' => 'Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive.',
            'photo' => 'images/animaux/coquillette.png'
        ]);
        
        return redirect()->route('home');
    }

    // Modifier un animal
    public function update($id)
    {
        $animal = Animal::find($id);
        if ($animal) {
            $animal->name = $animal->name . ' modifié';
            $animal->save();
        }
        return redirect()->route('home');
    }

    // Supprimer un animal
    public function delete($id)
    {
        $animal = Animal::find($id);
        if ($animal) {
            $animal->delete();
        }
        return redirect()->route('home');
    }
}