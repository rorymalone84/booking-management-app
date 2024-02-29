<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'duration',
        'duration',
        'child_price',
        'teen_price',
        'adult_price',
        'category_id'
    ];

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    //this relation applies only to users with admin and employee roles
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}