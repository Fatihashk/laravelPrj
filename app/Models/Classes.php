<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'Classes';
    protected $primaryKey = 'id';
    protected $fillable = ['classes', 'levels'];
    use HasFactory;
}
