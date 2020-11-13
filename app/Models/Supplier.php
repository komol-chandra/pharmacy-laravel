<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table= 'suppliers';

    protected $primaryKey = 'supplier_id';

    protected $fillable =[
    	'supplier_name',
    	'supplier_address',
    	'supplier_mobile',
    	'supplier_email',
    	'supplier_previous_balance',
    	'supplier_current_balance'
    ];

    public function scopeActive($query)
    {
        $query->where("status", 1);
    }
}
