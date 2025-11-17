<?php

namespace App\Http\Controllers;
use App\Models\Famille;

use Illuminate\Http\Request;

class FamilleController extends Controller
{
    //
    public function store(Request $request)
    {
        //Validation Data
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255|unique:familles',
        ]);

        // Safe Insertion
        $famille = Famille::create($validatedData);

        // Redirect success
        return redirect()->route('view')
                         ->with('success', 'Famille créée avec succès !');
    }

    public function update(Request $request, $id)
    {
        //Validation Data
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255|unique:familles,nom,' . $id,
        ]);

        // Find the famille by ID and update
        $famille = Famille::findOrFail($id);
        $famille->update($validatedData);

        // Redirect success
        return redirect()->route('view')
                         ->with('success', 'Famille mise à jour avec succès !');
    }   
}
