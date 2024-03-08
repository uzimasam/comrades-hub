<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerFollower extends Model
{
    use HasFactory;

    protected $table = 'seller_followers';

    protected $primaryKey = 'id';

    protected $fillable = [
        'seller_id',
        'user_id'
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
