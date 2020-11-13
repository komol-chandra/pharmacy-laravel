<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Medicine;
use Illuminate\Pagination\Paginator;

class Filter extends Component
{
    use WithPagination;
   
    public $searchTerm;
    public $currentPage = 1;

    public function render()
    {
        $query = '%'.$this->searchTerm.'%';

    	return view('livewire.filter', [
    		'medicines'		=>	Medicine::where(function($sub_query){
    							$sub_query->where('med_name', 'like', '%'.$this->searchTerm.'%')
    									  ->orWhere('med_barcode', 'like', '%'.$this->searchTerm.'%');
    						})->paginate(9)
    	]);
    }

    public function setPage($url)
    {
        $this->currentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function(){
            return $this->currentPage;
        });
    }
}
