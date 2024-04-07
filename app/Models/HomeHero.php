<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeHero extends Model
{
    use HasFactory;
    protected $table = '_home_heros';
    protected $fillable =[
        'record_id'=>'record_id',
        'title'=>'title',
        'description'=>'description',
    ];
}
