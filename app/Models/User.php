<?php

namespace App\Models;

use App\Permissions\HasPermissionsTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements MustVerifyEmail, JWTSubject
{
    use HasFactory;
    use HasUuids;
    use Notifiable;
    use SoftDeletes;

    use HasPermissionsTrait;


    protected $keyType = 'string';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'firstname',
        'lastname',
        'middlename',
        'phone_code',
        'phone',
        'photo',
        'hint_question',
        'hint_answer',
        'code',
        'qrcode',
        'email',
        'password',
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
        'phone_verified_at' => 'datetime',
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

    public function beneficiaries(): HasMany
    {
        return $this->hasMany(Beneficiary::class);
    }

    public function wallet(): HasOne
    {
        return $this->hasOne(Wallet::class, 'owner_id', 'id')->where('owner', 'user');
    }

    public function Card(): HasMany
    {
        return $this->hasMany(Card::class, 'owner_id', 'id');
    }

    public function BankAccount(): HasOne
    {
        return $this->hasOne(BankAccount::class);
    }

    public function hasVerifiedEmail()
    {
        // TODO: Implement hasVerifiedEmail() method.
    }

    public function markEmailAsVerified()
    {
        // TODO: Implement markEmailAsVerified() method.
    }

    public function sendEmailVerificationNotification()
    {
        // TODO: Implement sendEmailVerificationNotification() method.
    }

    public function getEmailForVerification()
    {
        // TODO: Implement getEmailForVerification() method.
    }
}
