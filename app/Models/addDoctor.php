<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addDoctor extends Model
{
    use HasFactory;
    protected $fillable=['name','number','location','specialist','section'];
}
