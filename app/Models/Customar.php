<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customar extends Model
{
    use HasFactory;
    protected $table = 'customars';
    protected $primaryKey = 'customar_id';

    protected$fillable = ['customar_name','customar_mobile','customar_address'];
}
