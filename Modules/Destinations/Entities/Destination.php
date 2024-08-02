<?php

namespace Modules\Destinations\Entities;

use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use App\Http\Filters\Filterable;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Destination extends Model implements HasMedia
{
    use Filterable, HasUploader, InteractsWithMedia, Translatable;

    protected $fillable = ['created_at', 'updated_at'];

    protected $table = 'destinations';

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

        $this->addMediaCollection('covers')
            ->singleFile();

        $this->addMediaCollection('gallery');
    }


    /**
     * Get the main image for the destination.
     * @return string
     */
    public function getMainImageAttribute() : string
    {
        return $this->getFirstMediaUrl('images');
    }


    /**
     * Get the main cover for the destination.
     * @return string
     */
    public function getCoverAttribute() : string
    {
        return $this->getFirstMediaUrl('covers');
    }


    /**
     * Get the gallery images for the destination.
     */
    public function getGalleryAttribute()
    {
        return $this->getMedia('gallery');
    }


    /**
     * Get the places for the destination.
     * @return HasMany
     */
    public function places() : HasMany
    {
        return $this->hasMany(Place::class);
    }


    /**
     * Get the bookings for the destination.
     * @return HasMany
     */
    public function bookings() : HasMany
    {
        return $this->hasMany(Booking::class);
    }

}
