<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Modules\Destinations\Entities\Destination;
use Modules\Partners\Entities\Partner;
use Modules\Settings\Entities\ContactUs;
use Modules\Sliders\Entities\Slider;

class FrontendController extends Controller
{

    public function index()
    {
        $sliders = Slider::get();
        $partners = Partner::get();
        $destinations = Destination::get();
        $news = Destination::get();

        return view('frontend::index', get_defined_vars());
    }


    public function about()
    {
        return view('frontend::about', get_defined_vars());
    }


    public function blogs()
    {
        return view('frontend::blogs', get_defined_vars());
    }


    public function blogDetails($blog)
    {
        return view('frontend::blog', get_defined_vars());
    }


    public function inquiry()
    {
        return view('frontend::inquiry', get_defined_vars());
    }


    public function destinations()
    {
        return view('frontend::destinations', get_defined_vars());
    }


    public function destinationDetails($destination)
    {
        return view('frontend::destination', get_defined_vars());
    }


    public function inquiryPost(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ], [
            'name.required' => __('frontend::frontend.name_required'),
            'email.required' => __('frontend::frontend.email_required'),
            'email.email' => __('frontend::frontend.email_email'),
            'message.required' => __('frontend::frontend.message_required'),
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            notify()->error($firstError);
            return redirect()->back();
        }
        $contact = ContactUs::create($request->except('_token'));
        notify()->success(__('frontend::frontend.contact_success'));
        return redirect()->back();
    }


    /**
     * @return View
     */
    public function contactPost(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ], [
            'name.required' => __('frontend::frontend.name_required'),
            'email.required' => __('frontend::frontend.email_required'),
            'email.email' => __('frontend::frontend.email_email'),
            'message.required' => __('frontend::frontend.message_required'),
        ]);

        if ($validator->fails()) {
            $firstError = $validator->errors()->first();
            notify()->error($firstError);
            return redirect()->back();
        }
        $contact = ContactUs::create($request->except('_token'));
        notify()->success(__('frontend::frontend.contact_success'));
        return redirect()->back();
    }
}
