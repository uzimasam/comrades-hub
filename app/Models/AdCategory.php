<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdCategory extends Model
{
    use HasFactory;

    protected $table = 'ad_categories';

    protected $primaryKey = 'id';

    protected $fillable = [
        'ad_id',
        'category_id'
    ];

    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
