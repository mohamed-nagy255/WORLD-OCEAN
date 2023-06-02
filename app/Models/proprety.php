<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proprety extends Model
{
    use HasFactory;
    protected $table = 'propreties';
    protected $fillable = [
        'name_proprety',
        'offer_id'
    ];
    public $timestamps = false;
}
