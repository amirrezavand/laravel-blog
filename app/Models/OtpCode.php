<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtpCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'expired_at'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeGenerateCode($query, $user)
    {
        if ($this->userActiveCode($user))
            return $this->userActiveCode($user)->code;

        do {
            $code = mt_rand(100000, 999999);

        } while ($this->isCodeUnique($user, $code));

        $user->otpCode()->create([
            'code' => $code,
            'expired_at' => now()->addMinutes(10)
        ]);

        return $code;
    }

    protected function isCodeUnique($user, int $code)
    {
        return !!$user->otpCode()->whereCode($code)->first();
    }

    protected function userActiveCode($user)
    {
        return $user->otpCode()->where('expired_at', '>', now())->first();
    }

    protected function scopeIsCodeExist($query, $user, $code)
    {
        return !!$user->otpCode()->whereCode($code)->where('expired_at', '>', now())->first();
    }
}
