<?php

namespace App\Http\Livewire;

use App\Models\Jobe;
use Livewire\Component;

class Search extends Component
{
    public $query = '';
    public $jobs = [];

    public function updatedQuery()
    {
        $words = '%' . $this->query .'%';

        // if(strlen($this->query) > 2){

            $this->jobs = Jobe::where('title', 'like', $words)
            ->orWhere('description', 'like', $words)
            ->get();
        // }
        

        
    }

    public function render()
    {
        return view('livewire.search');
    }
}

