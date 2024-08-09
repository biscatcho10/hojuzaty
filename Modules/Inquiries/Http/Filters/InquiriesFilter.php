<?php

namespace Modules\Inquiries\Http\Filters;

use App\Http\Filters\BaseFilters;

class InquiriesFilter extends BaseFilters
{
    /**
     * Registered filters to operate upon.
     * @var array
     */
    protected $filters = [
        'first_name',
        'second_name',
        'email',
        'phone',
        'check_in',
        'check_out',
        'message',
        'destination_id',
    ];

    /**
     * Filter the query by a given name.
     * @param string|int $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function name($value)
    {
        return $this->builder->where('name', 'like', "%{$value}%");
    }


    /**
     * Filter the query by a given email.
     * @param string $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function email($value)
    {
        return $this->builder->where('email', 'like', "%{$value}%");
    }


    /**
     * Filter the query by a given phone.
     * @param string $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function phone($value)
    {
        return $this->builder->where('phone', 'like', "%{$value}%");
    }


    /**
     * Filter the query by a given check in date.
     * @param string $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function checkIn($value)
    {
        return $this->builder->when($value, function ($query) use ($value) {
            return $query->whereDate('check_in', $value);
        });
    }


    /**
     * Filter the query by a given check out date.
     * @param string $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function checkOut($value)
    {
        return $this->builder->when($value, function ($query) use ($value) {
            return $query->whereDate('check_out', $value);
        });
    }


    /**
     * Filter the query by a given message.
     * @param string $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function message($value)
    {
        return $this->builder->where('message', 'like', "%{$value}%");
    }


    /**
     * Filter the query by a given destination id.
     * @param string|int $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function destinationId($value)
    {
        return $this->builder->where('destination_id', $value);
    }
}
