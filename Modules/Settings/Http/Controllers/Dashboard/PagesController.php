<?php

namespace Modules\Settings\Http\Controllers\Dashboard;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\HtmlString;
use Laraeast\LaravelSettings\Facades\Settings;
use Mail;
use Modules\Settings\Emails\SubscribeMail;
use Modules\Settings\Http\Requests\SettingRequest;
use Modules\Settings\Notifications\TestMail;
use Notification;

class PagesController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * The list of the files keys.
     *
     * @var array
     */
    protected $files = [
        'slider_video',
        'about_video',
    ];


    /**
     * SettingController constructor.
     */
    public function __construct()
    {
        $this->middleware('permission:read_settings')->only(['index', 'shipping']);
        $this->middleware('permission:create_settings')->only(['create', 'store']);
        $this->middleware('permission:update_settings')->only(['edit', 'update']);
        $this->middleware('permission:delete_settings')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     * @return Application|Factory|View|RedirectResponse
     */
    public function form()
    {

        return view('settings::settings.tabs.pages');
    }

    /**
     * Update the specified resource in storage.
     * @param SettingRequest $request
     * @return RedirectResponse
     */
    public function update(SettingRequest $request)
    {
        foreach ($request->except(
            array_merge(['_token', '_method', 'media'], $this->files)
        )
            as $key => $value) {
            Settings::set($key, $value);
        }

        foreach ($this->files as $file) {
            if ($request->hasFile($file)) {
                if (Settings::instance($file)) {
                    delFile(Settings::instance($file)->getMediaResource($file));
                }
                Settings::set($file, "value");
                Settings::instance($file)->addMediaFromRequest($file)->toMediaCollection($file);
            }
        }


        flash(trans('settings::settings.messages.updated'))->success();

        return redirect()->back();
    }

}
