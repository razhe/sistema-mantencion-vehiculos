<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'brand',
        'model',
        'year',
        'price',
        'user_id'
    ];

    public function historicalUsers() {
        return $this->belongsToMany(User::class, 'historicals');
    }
    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
