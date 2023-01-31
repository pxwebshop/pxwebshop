<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;

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
        'type',
    ];

    const TYPE_TRAINING = 'training';
    const TYPE_BLOG = 'blog';

    public static function boot() {
        parent::boot();

        static::deleting(function($category) {
            $category->blogs()->update([
                'status' => Blog::STOPPED
            ]);
        });
    }

    public function blogs()
    {
        return $this->belongsToMany('App\Models\Blog');
    }

    public function scopeTypeBlog($query)
    {
        return $query->where('type', self::TYPE_BLOG);
    }

    public function scopeTypeTraining($query)
    {
        return $query->where('type', self::TYPE_TRAINING);
    }
}
