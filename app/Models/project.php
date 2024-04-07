<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }
    protected $fillable = [
        'category_id'=>'category_id',
        'project_category'=>'project_category',
        'project_image_path'=>'project_image_path',
        'project_name'=>'project_name',
        'client_name'=>'client_name',
        'project_problem'=>'project_problem',
        'project_solution'=>'project_solution',
        'project_url'=>'project_url',

    ];
}
