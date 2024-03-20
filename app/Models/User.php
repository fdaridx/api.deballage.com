<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Sanctum\NewAccessToken;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [ 
        'first_name', 'last_name', 'state',  'type', 'phone', 'gender', 'email', 'password', 'info', 
        'created_at', 'updated_at', 'deleted_at', 
    ];

    protected $hidden = [ 'password' ];

    protected $casts = [ 'info' => 'json', 'password' => 'hashed' ];

    public function shop() {
        return $this->hasOne(Shop::class)->with('products');
    }
    public function commandes() {
        return $this->hasMany(Command::class);
    }

    public function notifications() {
        return $this->hasMany(Notification::class);
    }

    public function favorites() {
        return $this->hasMany(Favorite::class);
    }

    public function cart() {
        return $this->hasOne(Cart::class);
    }
}
