<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table= 'categories';

    protected $primaryKey = 'category_id';

    protected $fillable =['category_name', 'category_description','parentId'];

    public function category(){
    	return $this->belongsTo('App\Models\Category','parentId');
    }
    
    public function sub_category(){
    	return $this->hasMany('App\Models\Category','parentId');
    }

    public function scopeActive($query)
    {
        $query->where("status", 1);
    }
}
