<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $table = 'ads';

    protected $primaryKey = 'id';

    protected $fillable = [
        'seller_id',
        'title',
        'slug',
        'description',
        'image',
        'views',
        'status'
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'ad_categories', 'ad_id', 'category_id');
    }

    public function categoriesList()
    {
        return $this->categories->pluck('slug')->implode(' ');
    }
}
