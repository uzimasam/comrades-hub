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

    protected $table = 'users';

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'address',
        'phone',
        'role',
        'about'
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

    /**
     * Always encrypt the password when it is updated.
     *
     * @param $value
    * @return string
    */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function seller()
    {
        return $this->hasOne(Seller::class);
    }

    public function isAdmin()
    {
        if ($this->role === 'admin') {
            return true;
        }
        return false;
    }

    public function isUser()
    {
        if ($this->role === 'user') {
            return true;
        }
        return false;
    }

    public function isSeller()
    {
        $seller = $this->seller;
        if ($seller) {
            return true;
        }
        return false;
    }

    public function following()
    {
        return $this->hasMany(SellerFollower::class);
    }
}
