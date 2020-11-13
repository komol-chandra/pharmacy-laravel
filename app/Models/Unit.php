<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $table= 'units';

    protected $primaryKey = 'unit_id';

    protected $fillable =['unit_name', 'unit_description'];

    public function scopeActive($query)
    {
        $query->where("status", 1);
    }
}
