<?php

namespace Modules\Inquiries\Repositories;

use Modules\Contracts\CrudRepository;
use Modules\Destinations\Entities\Booking;
use Modules\Inquiries\Http\Filters\InquiriesFilter;

class InquiriesRepository implements CrudRepository
{
    /**
     * @var \Modules\Inquiries\Http\Filters\InquiriesFilter
     */
    private $filter;

    /**
     * InquiriesRepository constructor.
     *
     * @param \Modules\Inquiries\Http\Filters\InquiriesFilter $filter
     */
    public function __construct(InquiriesFilter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * Get all Inquiries as a collection.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function all()
    {
        return Booking::filter($this->filter)->paginate(request('perPage'));
    }

    /**
     * Save the created model to storage.
     *
     * @param array $data
     */
    public function create(array $data)
    {
        // code
    }

    /**
     * Display the given Booking instance.
     *
     * @param mixed $model
     * @return Booking
     */
    public function find($model)
    {
        if ($model instanceof Booking) {
            return $model;
        }

        return Booking::findOrFail($model);
    }

    /**
     * Update the given Booking in the storage.
     *
     * @param mixed $model
     * @param array $data
     */
    public function update($model, array $data)
    {
        // code
    }

    /**
     * Delete the given Booking from storage.
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
