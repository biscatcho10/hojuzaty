<?php

namespace Modules\Destinations\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Modules\Destinations\Entities\Booking;
use Modules\Destinations\Entities\Destination;

class BookingsController extends Controller
{
    /**
     * CountryController constructor.
     */
    public function __construct()
    {
        $this->middleware('permission:show_destinations')->only(['show']);
    }


    /**
     * Display the specified resource.
     *
     * @param Destination $destination
     * @param Booking $booking
     * @return View
     */
    public function show(Destination $destination, Booking $booking)
    {
        return view('destinations::destinations.show-book', get_defined_vars());
    }
}
