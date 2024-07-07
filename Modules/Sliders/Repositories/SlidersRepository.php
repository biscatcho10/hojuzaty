<?php

namespace Modules\Sliders\Repositories;

use Modules\Contracts\CrudRepository;
use Modules\Sliders\Entities\Slider;
use Modules\Sliders\Http\Filters\SlidersFilter;

class SlidersRepository implements CrudRepository
{
    /**
     * @var \Modules\Sliders\Http\Filters\SlidersFilter
     */
    private $filter;

    /**
     * SlidersRepository constructor.
     *
     * @param \Modules\Sliders\Http\Filters\SlidersFilter $filter
     */
    public function __construct(SlidersFilter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * Get all Sliders as a collection.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function all()
    {
        return Slider::filter($this->filter)->paginate(request('perPage'));
    }

    /**
     * Save the created model to storage.
     *
     * @param array $data
     * @return \Modules\Sliders\Entities\Slider
     */
    public function create(array $data)
    {
        $slider = Slider::create($data);

        $slider->addMediaFromRequest('image')->toMediaCollection('images');

        return $slider;
    }

    /**
     * Display the given Slider instance.
     *
     * @param mixed $model
     * @return \Modules\Sliders\Entities\Slider
     */
    public function find($model)
    {
        if ($model instanceof Slider) {
            return $model;
        }

        return Slider::findOrFail($model);
    }

    /**
     * Update the given Slider in the storage.
     *
     * @param mixed $model
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($model, array $data)
    {
        $slider = $this->find($model);

        $slider->update($data);

        if(isset($data['image']))
        {
            $slider->clearMediaCollection('images');
            $slider->addMediaFromRequest('image')->toMediaCollection('images');
        }

        return $slider;
    }

    /**
     * Delete the given Slider from storage.
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
