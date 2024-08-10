<?php

namespace Modules\Settings\Http\Controllers\Dashboard;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Settings\Entities\ContactUs;
use Yajra\DataTables\Facades\DataTables;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = ContactUs::latest('id')->paginate(10);
        return view('settings::contact-us.index', compact('data'));
    }


    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $contact = ContactUs::find($id);
        return view('settings::contact-us.show', compact('contact'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     */
    public function destroy($id)
    {
        $contact = ContactUs::find($id);
        $contact->delete();
        return redirect()->route('dashboard.contact-us.index')->with('success', trans('settings::contactus.messages.deleted'));
    }
}
