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

    const STATUS = [
        self::CHOOSE_STATUS => '---Chọn trạng thái---',
        self::NOT_APPROVED_YET => 'Chưa duyệt',
        self::ACTIVE => 'Đang hoạt động',
        self::STOPPED => 'Đã dừng'
    ];

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
}
