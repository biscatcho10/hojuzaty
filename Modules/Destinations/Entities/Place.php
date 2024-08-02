<?php

namespace Modules\Destinations\Entities;

use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use App\Http\Filters\Filterable;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Place extends Model implements HasMedia
{
    use Filterable, HasUploader, InteractsWithMedia, Translatable;

    protected $fillable = ['destination_id'];

    protected $table = 'places';

    public $translatedAttributes = ['name', 'description'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'translations',
        'media',
    ];


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')
            ->singleFile();
    }


    /**
     * Get the main image for the place.
     */
    public function getMainImageAttribute()
    {
        return $this->getFirstMediaUrl('images');
    }


    /**
     * Get the destination that owns the place.
     */
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

}
