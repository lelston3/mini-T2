<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

use App\Models\Famille;

class ManForm extends Component
{

    //>Init attributs
    public string $title;
    public array $table;
    public Collection $data;
    public string $road;
    public array $row;

    //>Init listener
    protected $listeners = ['updateMode' => 'updateMode',
                            'sendData' => 'loadRow'];

    //>Display
    public function render()
    {
        return view('livewire.man-form');
    }

    //>Mount data
    public function mount(string $title, array $table, Collection $data = null, array $row = []){
        $this->title = $title;
        $this->table = $table;
        $this->loadData();
    }
    //-load data
    public function loadData(){
        $roadName = $this->defRoad();
        $this->road = route($roadName);
        if ($this->table['title'] === 'article'){
            $this->data = Famille::all();
        }
    }
    //-load row
    public function loadRow(array $row, string $formType){
        $roadName = $this->defRoad();
        $this->title = 'Update';
        $this->row = [];
        $this->row = $row;
        $this->road = route($roadName, $row['id']);
    }

    //-update mode
    public function updateMode():void{
        if ($this->table['mode']){
            $this->table['mode'] = null;
            $this->title = 'Add';
            $this->row = [];
        } $this->table['mode'] = 'update';
        $this->title = 'Update';
    }



    //>Tools
    public function defRoad(){
        return $this->table['title'] . '.' . ($this->table['mode'] ?? 'store');
    }
}

