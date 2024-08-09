<?php

namespace Modules\Inquiries\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Modules\Destinations\Entities\Booking;
use Modules\Destinations\Entities\Destination;
use Modules\Inquiries\Repositories\InquiriesRepository;

class InquiriesController extends Controller
{
    /**
     * @var InquiriesRepository
     */
    private $repository;

    /**
     * CountryController constructor.
     * @param InquiriesRepository $repository
     */
    public function __construct(InquiriesRepository $repository)
    {
        $this->middleware('permission:read_bookings')->only(['index']);
        $this->middleware('permission:delete_bookings')->only(['destroy']);
        $this->middleware('permission:show_bookings')->only(['show']);

        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $data = $this->repository->all();
        $destinations = Destination::listsTranslations('name')->pluck('name', 'id')->toArray();
        return view('inquiries::inquiries.index', get_defined_vars());
    }

    /**
     * Display the specified resource.
     *
     * @param Booking $booking
     * @return View
     */
    public function show(Booking $booking)
    {
        $inquiry = $this->repository->find($booking);

        return view('inquiries::inquiries.show', compact('inquiry'));
    }


    /**
     * Remove the specified resource from storage.
     * @param Booking $booking
     */
    public function destroy(Booking $booking)
    {
        $this->repository->delete($booking);

        flash(trans('inquiries::inquiries.messages.deleted'))->error();

        return redirect()->route('dashboard.inquiries.index');
    }
}
