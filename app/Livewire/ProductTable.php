<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithoutUrlPagination;

class ProductTable extends Component
{

    use WithoutUrlPagination;

    public $perPage = 5;

    public $sortBy = 'created_at';
    public $sortDir = 'DESC';

    public $search = '';

    public $currentUrl;



    public function setSortBy($sortColum){
        if($this->sortBy == $sortColum){
            $this->sortDir = $this->sortDir == 'ASC' ? 'DESC' : 'ASC';
            return;
        }

        $this->sortBy = $sortColum;
        $this->sortDir = 'ASC';
    }


    public function render()
    {

        $current_url = url()->current();
        $explode_url = explode('/',$current_url);
        
        $this->currentUrl = $explode_url[3].' '.$explode_url[4];


        return view('livewire.product-table',[
            'products' => Product::with('category')->search($this->search)
            ->orderBy($this->sortBy, $this->sortDir)
            ->paginate($this->perPage),
        ]);
    }
}
