<?php

namespace App\Traits;
use App\Models\Category;

trait subCategoryTraits {
    public function subCatFind($id)
    {   
        $subCategory=Category::where('parentId',$id)->get();
        return response()->json($subCategory,200);
    }
}