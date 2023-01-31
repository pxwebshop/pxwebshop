<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $table = 'training';

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
}
