<?php

namespace Modules\Destinations\Repositories;

use Modules\Contracts\ChildCrudRepository;
use Modules\Destinations\Entities\Destination;
use Modules\Destinations\Entities\Place;
use Modules\Destinations\Http\Filters\PlaceFilter;

class PlacesRepository implements ChildCrudRepository
{
    /**
     * @var \Modules\Destinations\Http\Filters\PlaceFilter
     */
    private $filter;

    /**
     * PlacesRepository constructor.
     *
     * @param \Modules\Destinations\Http\Filters\PlaceFilter $filter
     */
    public function __construct(PlaceFilter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * Get all Places as a collection.
     * @param Destination $destination
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function all($destination)
    {
        return $destination->places()->filter($this->filter)->paginate(request('perPage'));
    }

    /**
     * Save the created model to storage.
     * @param Destination $destination
     * @param array $data
     * @return \Modules\Destinations\Entities\Place
     */
    public function create($destination, array $data)
    {
        $place = $destination->places()->create($data);

        // save the image
        $place->addMediaFromRequest('image')->toMediaCollection('images');

        return $place;
    }

    /**
     * Display the given Destination instance.
     *
     * @param mixed $model
     * @return \Modules\Destinations\Entities\Place
     */
    public function find($model)
    {
        if ($model instanceof Place) {
            return $model;
        }

        return Place::findOrFail($model);
    }

    /**
     * Update the given Place in the storage.
     *
     * @param mixed $model
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($model, array $data)
    {
        $destination = $this->find($model);

        $destination->update($data);

        // save the image
        if (isset($data['image'])) {
            $destination->clearMediaCollection('images');
            $destination->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return $destination;
    }

    /**
     * Delete the given Destination from storage.
     *
     * @param mixed $model
     * @return void
     * @throws \Exception
     */
    public function delete($model)
    {
        $this->find($model)->delete();
    }
}
