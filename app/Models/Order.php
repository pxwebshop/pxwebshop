<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'service_pack',
        'status',
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

    const SERVICE_PACK = 0;
    const SERVICE_PACK1 = 1;
    const SERVICE_PACK2 = 2;
    const SERVICE_PACK3 = 3;

    const SERVICES_PACKES = [
        self::SERVICE_PACK => 'Chưa chọn gói',
        self::SERVICE_PACK1 => 'Gói cơ bản',
        self::SERVICE_PACK2 => 'Gói cao cấp',
        self::SERVICE_PACK3 => 'Gói chuyên nghiệp',
    ];

    public function scopeNotApprovedYet($query)
    {
        return $query->where('status', self::NOT_APPROVED_YET);
    }
}
