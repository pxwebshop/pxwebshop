<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
    ];

    public static function boot() {
        parent::boot();

        static::deleting(function($category) {
            $category->blogs()->delete();
        });
    }

    public function blogs()
    {
        return $this->belongsToMany('App\Models\Blog');
    }
}
