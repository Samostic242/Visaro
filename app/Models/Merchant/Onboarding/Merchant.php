<?php

namespace App\Models\Merchant\Onboarding;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Merchant extends Authenticatable implements MustVerifyEmail, JWTSubject
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;
    use HasUuids;

    protected $fillable = [
        'business_name',
        'business_type',
        'business_phone_code',
        'business_phone',
        'business_address',
        'business_registration_number',
        'acronym',
        'official_name',
        'website',
        'presence',
        'logo',
        'code',
        'category',
        'country_id',
        'business_email',
        'phone_code',
        'phone',
        'customization',
        'status',
        'mode',
        'meta',
        'active',
        'qrcode',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
        'business_verified_at' => 'datetime',
        'meta' => 'array',
    ];


    public function getJWTIdentifier()
    {
        return $this->getKey();
    }


    public function getJWTCustomClaims(): array
    {
        return [];
    }
}
