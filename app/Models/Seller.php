<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $table = 'sellers';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'store_name',
        'store_description',
        'store_address',
        'store_phone',
        'store_email',
        'store_logo',
        'store_banner',
        'store_status',
        'store_slug'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->hasMany(SellerFollower::class);
    }

    // check if the authenticated user is following the seller
    public function isFollowedByUser($user_id)
    {
        return $this->followers->contains('user_id', $user_id);
    }

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
