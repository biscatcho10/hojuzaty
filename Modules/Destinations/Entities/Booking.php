<?php

namespace Modules\Destinations\Entities;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
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
     * Get the destination that owns the booking.
     */
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }


    /**
     * Get the full name of the booking.
     * 
     * @return string
     */
    public function getNameAttribute()
    {
        return "{$this->first_name} {$this->second_name}";
    }
    
}
