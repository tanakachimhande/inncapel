<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;
    public function services()
    {
        return $this->hasMany(Service::class, 'category_id');
    }
    protected $fillable = [
        'service_image_path'=>'service_image_path',
        'services_title'=>'services_title',

    ];
}
