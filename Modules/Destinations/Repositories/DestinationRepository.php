<?php

namespace Modules\Destinations\Repositories;

use Modules\Contracts\CrudRepository;
use Modules\Destinations\Entities\Destination;
use Modules\Destinations\Http\Filters\DestinationFilter;

class DestinationRepository implements CrudRepository
{
    /**
     * @var \Modules\Destinations\Http\Filters\DestinationFilter
     */
    private $filter;

    /**
     * DestinationRepository constructor.
     *
     * @param \Modules\Destinations\Http\Filters\DestinationFilter $filter
     */
    public function __construct(DestinationFilter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * Get all Destinations as a collection.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function all()
    {
        return Destination::filter($this->filter)->withCount('places')->latest()->paginate(request('perPage'));
    }

    /**
     * Save the created model to storage.
     *
     * @param array $data
     * @return \Modules\Destinations\Entities\Destination
     */
    public function create(array $data)
    {
        /** @var Destination $destination */
        $destination = Destination::create($data);

        // save the main image
        if (isset($data['image'])) {
            $destination->addMedia($data['image'])->toMediaCollection('images');
        }

        // save the cover
        if (isset($data['cover'])) {
            $destination->addMedia($data['cover'])->toMediaCollection('covers');
        }

        // save the galleries
        if (isset($data['galleries'])) {
            foreach ($data['galleries'] as $gallery) {
                $destination->addMedia($gallery)->toMediaCollection('gallery');
            }
        }

        return $destination;
    }

    /**
     * Display the given Destination instance.
     *
     * @param mixed $model
     * @return \Modules\Destinations\Entities\Destination
     */
    public function find($model)
    {
        if ($model instanceof Destination) {
            return $model;
        }

        return Destination::findOrFail($model);
    }

    /**
     * Update the given Destination in the storage.
     *
     * @param mixed $model
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($model, array $data)
    {
        $destination = $this->find($model);

        $destination->update($data);

        // save the main image
        if (isset($data['image'])) {
            $destination->addMedia($data['image'])->toMediaCollection('images');
        }

        // save the cover
        if (isset($data['cover'])) {
            $destination->addMedia($data['cover'])->toMediaCollection('covers');
        }

        // save the galleries
        if (isset($data['galleries'])) {
            foreach ($data['galleries'] as $gallery) {
                $destination->addMedia($gallery)->toMediaCollection('gallery');
            }
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
