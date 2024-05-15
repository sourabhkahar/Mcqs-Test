<?php

namespace App\Livewire;

use App\Models\category;
use Livewire\Component;

class DataTable extends Component
{
    // use WithPagination;

    public $categories;
    public function render()
    {
        $this->categories = category::all();
        return view('livewire.data-table');
        // return view('livewire.data-table')->with(['categories' => $this->categories]);
    }
}