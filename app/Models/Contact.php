<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'status',
        'description',
        'created_at',
        'updated_at'
    ];

    const NOT_APPROVED_YET = 0;
    const APPROVED = 1;
    const CANCEL = 2;

    const STATUS = [
        self::NOT_APPROVED_YET => 'Chưa được duyệt',
        self::APPROVED => 'Đã chấp nhận',
        self::CANCEL => 'Huỷ bỏ',
    ];

    public function scopeNotApprovedYet($query)
    {
        return $query->where('status', self::NOT_APPROVED_YET);
    }
}
