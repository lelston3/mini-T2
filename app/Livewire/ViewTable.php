<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

use App\Models\Famille; 
use App\Models\Article;

class ViewTable extends Component
{
    //>Init attributs
    public string $title;
    public array $table;
    public Collection $data;

    //>Init listener
    protected $listeners = ['dataRefresh' => 'loadData',
                            'deleteMode' => 'deleteMode',
                            'updateMode' => 'updateMode'];

    //>Display
    public function render()
    {
        return view('livewire.view-table');
    }   

    //>Mount data 
    public function mount(string $title, array $table){
        $this->table = $table;
        $this->loadData();
    }

    //-load data
    public function loadData(){
        $title = $this->table['title'];

        if ($title === 'famille'){
            $this->data = Famille::all();
        }elseif($title === 'article'){
            $this->data = Article::all();
        }   
    }
    //-delete data
    public function deleteData(int $id){
        $title = $this->table['title'];

        if ($title === 'famille'){
            Famille::destroy($id);
        }elseif ($title){ Article::destroy($id); }
        $this->mount($title,$this->table);
    }
    //-update data
    public function updateData(int $id){
        $title = $this->table['title'];
        if ($title === 'famille'){
            $row = Famille::find($id);
        }elseif ($title === 'article'){ $row = Article::find($id); }
        $this->dispatch('sendData', row: $row, formType: $title);
    }


    //>Set View Mode
    //-set delete mode
    public function deleteMode(){
        if ($this->table['mode']){
            $this->table['mode'] = null;
        }else{ $this->table['mode'] = 'delete'; }
    }
    //-set update mode
    public function updateMode(){
        if ($this->table['mode']){
            $this->table['mode'] = null;
        }else{ $this->table['mode'] = 'update'; }
    }

}
