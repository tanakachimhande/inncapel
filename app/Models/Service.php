<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }
    protected $fillable = [
        'category_id'=>'category_id',
        'service_name'=>'service_name',
        'service_category'=>'service_category',

    ];
}
