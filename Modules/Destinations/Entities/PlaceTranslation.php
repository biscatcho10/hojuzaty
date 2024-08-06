<?php

namespace Modules\Destinations\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlaceTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public $timestamps = false;
}
