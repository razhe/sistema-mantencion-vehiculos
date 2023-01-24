<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historical extends Model
{
    use HasFactory;

    public function users() {
        return $this->BelongsTo(User::class, 'user_id', 'id');
    }
    public function vehicles() {
        return $this->BelongsTo(Vehicle::class, 'vehicle_id', 'id');
    }
}
