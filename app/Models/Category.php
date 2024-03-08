<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'status'
    ];

    public function ads()
    {
        return $this->belongsToMany(Ad::class, 'ad_categories', 'category_id', 'ad_id');
    }

    public function items()
    {
        return $this->belongsToMany(Item::class, 'item_categories', 'category_id', 'item_id');
    }

    public function views()
    {
        $ads = $this->ads->sum('views');
        $items = $this->items->sum('views');
        return $ads + $items;
    }
}
