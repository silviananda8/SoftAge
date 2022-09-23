<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // protected $fillable = ['icon','name','description'];
    
    protected $guarded = ['id'];
    public $timestamps = false;
    
    use HasFactory;
}
