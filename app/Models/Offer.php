<?php

namespace App\Models;

use App\Models\Day;
use App\Models\country;
use App\Models\Category;
use App\Models\proprety;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer extends Model
{
    use HasFactory;
    protected $table = 'offers';
    protected $fillable = [
        'name',
        'image',
        'price',
        'day_cont',
        'spcial',
        'country_id',
        'category_id',
    ];

    //relationshep countries
    public function country(): BelongsTo
    {
        return $this->belongsTo(country::class, 'country_id', 'id');
    }

    //relationshep categories
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    
    //relationshep days
    public function days(): HasMany
    {
        return $this->hasMany(Day::class, 'offer_id', 'id');
    }

    //relationshep proprety
    public function proprety(): HasMany
    {
        return $this->hasMany(proprety::class, 'offer_id', 'id');
    }
}
