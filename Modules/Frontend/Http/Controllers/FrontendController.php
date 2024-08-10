<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Destinations\Entities\Destination;
use Modules\Frontend\Http\Requests\ContactsRequest;
use Modules\Frontend\Http\Requests\InquiryRequest;
use Modules\News\Entities\News;
use Modules\Partners\Entities\Partner;
use Modules\Settings\Entities\ContactUs;
use Illuminate\Support\Facades\Session;
use App\Enums\NotificationTypesEnum;
use App\Services\NotificationsService;
use Modules\Accounts\Entities\Admin;

class FrontendController extends Controller
{

    protected $service;

    public function __construct(NotificationsService $service)
    {
        Session::put('front_locale', 'en');
        $this->service = $service;
        view()->share([
            'partners' => Partner::get(),
            'destinations' => Destination::get(),
        ]);
    }


    public function index()
    {
        $lang = Session::get('front_locale');
        $news = News::get();
        return view('frontend::index', get_defined_vars());
    }


    public function about()
    {
        $lang = Session::get('front_locale');
        return view('frontend::about', get_defined_vars());
    }


    public function blogs()
    {
        $lang = Session::get('front_locale');
        $blogs = News::get();
        return view('frontend::blogs', get_defined_vars());
    }


    public function blogDetails(News $blog)
    {
        $lang = Session::get('front_locale');
        $relatedBlogs = News::where('id', '!=', $blog->id)->latest('id')->get();
        return view('frontend::blog', get_defined_vars());
    }


    public function destinations()
    {
        $lang = Session::get('front_locale');
        return view('frontend::destinations', get_defined_vars());
    }


    public function destinationDetails(Destination $destination)
    {
        $lang = Session::get('front_locale');
        $places = $destination->places;
        $galleries = $destination->galleries;
        return view('frontend::destination', get_defined_vars());
    }


    public function inquiry(Destination $destination)
    {
        $lang = Session::get('front_locale');
        return view('frontend::inquiry', get_defined_vars());
    }


    /**
     * @param  Destination $destination
     * @param  InquiryRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function inquiryPost(Destination $destination, InquiryRequest $request)
    {
        try {
            // create the inquiry
            $inquiry = $destination->bookings()->create($request->validated());

            // notify the admin that there is a new vendor
            $admins = Admin::whereRole(['super_admin'])->get();
            $admin_subject = ["inquiries::inquiries.notifications.new.subject"];
            $admin_body = ["inquiries::inquiries.notifications.new.body", [
                'name' => $inquiry->name,
                'destination' => $inquiry->destination->name,
            ]];
            foreach ($admins as $admin) {
                $this->service->handleNotification(NotificationTypesEnum::NewInquiry->value, $admin, $admin_subject, $admin_body, $inquiry);
            }

        } catch (\Exception $exception) {
            \Log::error($exception->getMessage());
            return response()->json(['status' => 'error', 'message' => __('There are an error, please try again later')]);
        }
        return response()->json(['status' => 'success', 'message' => __('frontend::frontend.inquiry_success')]);
    }


    /**
     * @param  ContactsRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function contactPost(ContactsRequest $request)
    {
        try {
            // create the contact
            $contact = ContactUs::create($request->validated());

            // notify the admin that there is a new vendor
            $admins = Admin::whereRole(['super_admin'])->get();
            $admin_subject = ["frontend::frontend.notifications.contact.subject"];
            $admin_body = ["frontend::frontend.notifications.contact.body", [
                'name' => $contact->name,
            ]];
            foreach ($admins as $admin) {
                $this->service->handleNotification(NotificationTypesEnum::NewContact->value, $admin, $admin_subject, $admin_body, $contact);
            }

        } catch (\Exception $exception) {
            \Log::error($exception->getMessage());
            return response()->json(['status' => 'error', 'message' => __('There are an error, please try again later')]);
        }
        return response()->json(['status' => 'success', 'message' => __('frontend::frontend.contact_success')]);
    }
}
