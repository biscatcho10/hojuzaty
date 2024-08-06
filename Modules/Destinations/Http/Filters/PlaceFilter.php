<?php

namespace Modules\Destinations\Http\Filters;

use App\Http\Filters\BaseFilters;

class PlaceFilter extends BaseFilters
{
    /**
     * Registered filters to operate upon.
     *
     * @var array
     */
    protected $filters = [
        'name',
        'description',
        'destination_id',
    ];

    /**
     * Filter the query by a given name.
     *
     * @param string|int $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function name($value)
    {
        if ($value) {
            return $this->builder->where('name', 'LIKE', "%$value%");
        }

        return $this->builder;
    }


    /**
     * Filter the query by a given description.
     *
     * @param string|int $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function description($value)
    {
        if ($value) {
            return $this->builder->where('description', 'LIKE', "%$value%");
        }

        return $this->builder;
    }


    /**
     * Filter the query by a given destination_id.
     *
     * @param string|int $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function destinationId($value)
    {
        if ($value) {
            return $this->builder->where('destination_id', $value);
        }

        return $this->builder;
    }

}
