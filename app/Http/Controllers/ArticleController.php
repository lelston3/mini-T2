<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function store(Request $request)
    {
        //Validation Data
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255|unique:familles',
            'prix_ht' => 'required|numeric|min:0',
            'prix_achat' => 'required|numeric|min:0',
            'taux_TGC' => 'required|numeric|min:0|max:100',
            'famille_id' => 'required|exists:familles,id',
        ]);

        // Safe Insertion
        $article = Article::create($validatedData);

        // Redirect success
        return redirect()->route('view')
                         ->with('success', 'Famille créée avec succès !');
    }

    public function update(Request $request, $id)
    {
        //Validation Data
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255|unique:familles,nom,' . $id,
            'prix_ht' => 'required|numeric|min:0',
            'prix_achat' => 'required|numeric|min:0',
            'taux_TGC' => 'required|numeric|min:0|max:100',
            'famille_id' => 'required|exists:familles,id',
        ]);

        // Find the article by ID and update
        $article = Article::findOrFail($id);
        $article->update($validatedData);

        // Redirect success
        return redirect()->route('view')
                         ->with('success', 'Article mis à jour avec succès !');
    }

}
