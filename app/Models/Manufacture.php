<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    use HasFactory;
    protected $table= 'manufactures';

    protected $primaryKey = 'manufac_id';

    protected $fillable =[
        'manufac_name',
        'manufac_email',
        'manufac_mobile',
        'manufac_address',
        'manufac_details',
        'manufac_balance', 
    ];

    public function scopeActive($query)
    {
        $query->where("status", 1);
    }
}
