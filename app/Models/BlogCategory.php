<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $table = 'blog_category';

    protected $fillable = [
        'id',
        'blog_id',
        'category_id',
        'created_at',
        'updated_at'
    ];

    public function blogs()
    {
        return $this->belongsToMany('App\Models\Blog');
    }
}
