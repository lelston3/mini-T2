<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class HubController extends Controller
{
    //-Display Hub
    public function hub(){
        return view('hub');
    }

    //-Display View
    public function viewData(){
        $fcolumn = Schema::getColumnListing('familles');
        $acolumn = Schema::getColumnListing('articles');

        $Fmodel = ['title' => 'famille','column' => $fcolumn, 'mode' => null, 'road' => null];
        $Amodel = ['title' => 'article','column' => $acolumn, 'mode' => null, 'road' => null];
        return view('view', compact('Fmodel', 'Amodel'));   
    }
}
