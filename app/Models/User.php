<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'last_names'
    ];

    public function historicalVehicles() {
        return $this->belongsToMany(Vehicle::class, 'historicals');
    }

    public function vehicle() {
        return $this->hasMany(Vehicle::class, 'user_id', 'id');
    }

    protected $hidden = [
        // 'password',
        // 'remember_token',
    ];

    protected $casts = [
        // 'email_verified_at' => 'datetime',
    ];
}
