<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FamilleExport;
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
    
    public function export() 
    {
        return Excel::download(new FamilleExport(), 'famille.csv', \Maatwebsite\Excel\Excel::CSV,[
            'Content-type' => 'text/csv',
            'Content-Disposition' => 'attachement; filename=famille.csv',
            'Content-Tranfert-Encoding' => 'binary',
            'charset' => 'UTF-8',
            'Content-Encoding' => 'UTF-8'

        ]);
    }
}
