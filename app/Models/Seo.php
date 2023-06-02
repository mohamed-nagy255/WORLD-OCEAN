<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;
    protected $table = 'seo_metas';
    public $timestamps = false;
    protected $fillable = [
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
}
