<?php

namespace Modules\Sliders\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SliderTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    protected $table = 'slider_translations';

    public $timestamps = false;

}
