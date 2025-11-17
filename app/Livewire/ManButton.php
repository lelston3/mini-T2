<?php

namespace App\Livewire;


use Livewire\Component;

use App\Models\Famille;
use App\Models\Article;

class ManButton extends Component
{
    //> Init attributs
    public string $title;
    public string $action;

    //> Display view
    public function render()
    {
        return view('livewire.man-button');
    }

    //> Global func

    //-generate data
    public function generateData():void{
        Famille::factory()->count(5)->create();
        Article::factory()->count(50)->create();
        $this->sendEven('dataRefresh');
    }
    //-reset all data
    public function resetAll():void{
        Famille::truncate();
        Article::truncate();
        $this->sendEven('dataRefresh');
    }

    //>Manage Modes
    //-delete mode
    public function deleteMode(){
        $this->sendEven('deleteMode');
    }
    //-update mode
    public function updateMode(){
        $this->sendEven('updateMode');
    }


    //>Tools
    public function sendEven(string $title):void{
        $this->dispatch($title);
        session()->flash('success',$title);
    }

}
