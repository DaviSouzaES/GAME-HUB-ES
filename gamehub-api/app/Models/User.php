<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, HasApiTokens;

    public function gameLikes() {
        return $this->hasMany(GameLike::class);
    }
    public function gameBougth() {
        return $this->hasMany(GameBougth::class);
    }
    protected $fillable = [
        'name', 'email', 'password',
    ];
}
