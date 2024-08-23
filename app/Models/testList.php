<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testList extends Model
{
    use HasFactory;

    protected $fillable=['test_name','test_group','test_section','test_charge','referrer_fee'];
}
