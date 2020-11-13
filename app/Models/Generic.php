<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generic extends Model
{
    use HasFactory;
    protected $table='generics';

    protected $primaryKey = 'generic_id';

    protected$fillable = [
        'generic_name',
        'generic_details',
    ];
    
    public function scopeActive($query)
    {
        $query->where("status", 1);
    }
}
