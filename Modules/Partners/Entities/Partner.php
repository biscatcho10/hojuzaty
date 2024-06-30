<?php

namespace Modules\Partners\Entities;

use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use App\Http\Filters\Filterable;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Exhibitions\Entities\Exhibition;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Partner extends Model implements HasMedia
{
    use HasFactory, Filterable, HasUploader, InteractsWithMedia;

    protected $fillable = ['name', 'link','rank'];

    protected $table = 'partners';

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'media',
    ];


    /**
     * Define the media collections.
     *
     * @return void
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')
            ->useFallbackUrl('https://cdn.shopify.com/s/files/1/0422/0194/0126/products/CombinePhotos_800x.png?v=1633998941');
    }



    /**
     * The Partner image url.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->getFirstMediaUrl('images');
    }
}
