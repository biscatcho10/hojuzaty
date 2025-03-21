<?php

namespace Modules\Sliders\Entities;

use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use App\Http\Filters\Filterable;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Slider extends Model implements HasMedia
{
    use HasFactory, Translatable, Filterable, HasUploader, InteractsWithMedia;

    protected $fillable = ['created_at', 'updated_at'];

    protected $table = 'sliders';

    public $translatedAttributes = ['title', 'content'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'translations',
        'media',
    ];


    /**
     * Define the media collections.
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images');
    }



    /**
     * The sliders image url.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->getFirstMediaUrl('images');
    }

}
