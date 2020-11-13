<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $table = 'medicines';
    protected $primaryKey = 'med_id';


    protected $fillable = [
        'med_name',
        'med_cat_id',
        'med_sub_cat_id',
        'med_type_id',
        'med_gen_id',
        'med_manuf_id',
        'med_unit_id',
        'med_sku',
        'med_barcode',
        'med_image',
        'med_vat',
        'med_tax',
        'med_details',
        'med_single_weight',
        'med_box_weight',
        'med_per_box',
        'med_mini_unit',
        'med_location'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category','med_cat_id');
    }


    public function sub_category()
    {
        return $this->belongsTo('App\Models\Category','med_sub_cat_id');
    }

   
    public function generic()
    {
        return $this->belongsTo('App\Models\Generic','med_gen_id');
    }
    public function type()
    {
        return $this->belongsTo('App\Models\Type','med_type_id');
    }	

}
