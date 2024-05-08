<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserSecurity extends Model
{
    use HasFactory;
    use HasUuids;
    use SoftDeletes;

    protected $fillable = [
        'public_id',
        'user_id',
        'pin',
        'security_question',
        'security_answer',
        'set_pin',
        'set_security_question',
        'invalid_entries_count',
        'next_available_trial',
        'active'
    ];


    /* public function setPinAttribute($pin)
    {
        $this->attributes['pin'] = bcrypt($pin);
    } */



    /**
     * Get the user that owns the UserSecurity
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

     public function User(): BelongsTo
     {
        return $this->belongsTo(User::class);
     }
}
