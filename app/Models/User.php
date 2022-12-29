<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'username',
        'email',
        'password',
        'status',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    protected $appends = [
        'id', 'status', 'name'
    ];

    public function username()
    {
        return 'username';
    }

    const NOT_APPROVED_YET = 0;
    const ACTIVE = 1;
    const INACTIVE = 2;

    const STATUS = [
        self::NOT_APPROVED_YET,
        self::ACTIVE,
        self::INACTIVE
    ];

    const USER_ROLE = 1;
    const ADMIN_ROLE = 2;

    public static function getStatus()
    {
        return self::STATUS;
    }
}
