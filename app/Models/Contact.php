<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable =[
        'record_id'=>'record_id',
        'address'=>'address',
        'phone'=>'phone',
        'email'=>'email',
        'opening_days'=>'opening_days',
        'opening_hours'=>'opening_hours',

    ];
}
