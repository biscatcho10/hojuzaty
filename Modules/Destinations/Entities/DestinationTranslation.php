<?php

namespace Modules\Destinations\Entities;

use Illuminate\Database\Eloquent\Model;

class DestinationTranslation extends Model
{
    protected $fillable = ['name', 'description'];
    public $timestamps = false;
}
