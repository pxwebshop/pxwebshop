<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'id',
        'user_id',
        'status',
        'title',
        'content',
        'featured_image',
        'created_at',
        'updated_at'
    ];

    const CHOOSE_STATUS = 0;
    const NOT_APPROVED_YET = 1;
    const ACTIVE = 2;
    const STOPPED = 3;

    const OUTSTANDING = 1;

    const STATUS = [
        self::CHOOSE_STATUS => '---Chọn trạng thái---',
        self::NOT_APPROVED_YET => 'Chưa duyệt',
        self::ACTIVE => 'Đang hoạt động',
        self::STOPPED => 'Đã dừng'
    ];

    public static function boot() {
        parent::boot();

        static::deleting(function($blog) {
            $blog->blog_category()->delete();
        });
    }

    public static function getStatus()
    {
        return self::STATUS;
    }

    public function blog_category()
    {
        return $this->belongsToMany('App\Models\Category', 'blog_category', 'blog_id', 'category_id');
    }

    public function category()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', self::ACTIVE);
    }
    
    public function scopeNotOutstanding($query)
    {
        return $query->where('outstanding', '!=', self::OUTSTANDING);
    }

    public function scopeOutstanding($query)
    {
        return $query->where('outstanding', self::OUTSTANDING);
    }
}
