<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;
    protected $fillable = [
        'seo_page'=>'seo_page',
        'seo_title'=>'seo_title',
        'seo_description'=>'seo_description',
        'seo_keywords'=>'seo_keywords',

    ];
}
