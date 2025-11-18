<?php


namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ArticleExport;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //> Store
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

    //> Updata
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

    //> Export
    public function export() 
    {
        return Excel::download(new ArticleExport(), 'article.csv', \Maatwebsite\Excel\Excel::CSV,[
            'Content-type' => 'text/csv',
            'Content-Disposition' => 'attachement; filename=article.csv',
            'Content-Tranfert-Encoding' => 'binary',
            'charset' => 'UTF-8',
            'Content-Encoding' => 'UTF-8'

        ]);
    }

}
