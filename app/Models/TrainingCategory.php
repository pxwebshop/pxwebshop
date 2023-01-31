<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingCategory extends Model
{
    use HasFactory;

    protected $table = 'training_category';

    protected $fillable = [
        'id',
        'training_id',
        'category_id',
        'created_at',
        'updated_at'
    ];

    public function training()
    {
        return $this->belongsToMany('App\Models\Training');
    }
}
