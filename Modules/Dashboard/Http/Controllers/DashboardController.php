<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Modules\Accounts\Entities\User;
use Modules\Destinations\Entities\Booking;
use Modules\Destinations\Entities\Destination;
use Modules\Partners\Entities\Partner;
use Modules\Settings\Entities\ContactUs;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index()
    {
        $users = User::count();
        $destinations = Destination::count();
        $partners = Partner::count();
        $messages =  ContactUs::orderBy('created_at', 'desc')->take(4)->get();
        $inquiries =  Booking::orderBy('created_at', 'desc')->paginate(4);
        return view('dashboard::index', get_defined_vars());
    }
}
