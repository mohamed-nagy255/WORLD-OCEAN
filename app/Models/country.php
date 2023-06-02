<?php

namespace App\Models;

use App\Models\Offer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class country extends Model
{
    use HasFactory;
    protected $table = 'countries';
    protected $fillable = [
        'name',
        'image',
    ];

    //Offer
    public function offers(): HasMany
    {
        return $this->hasMany(Offer::class, 'category_id', 'id');
    }
}
