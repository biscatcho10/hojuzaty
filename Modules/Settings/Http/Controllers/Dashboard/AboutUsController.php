<?php

namespace Modules\Settings\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laraeast\LaravelSettings\Facades\Settings;
use Modules\Settings\Entities\AboutUs;

class AboutUsController extends Controller
{

    /**
     * The list of the files keys.
     *
     * @var array
     */
    protected $files = [
        'why_choose_us_cover',
        'vision_cover',
        'mission_cover',
    ];

    public function form()
    {
        return view('settings::settings.tabs.about');
    }

    public function update(Request $request)
    {
        foreach ($request->except(array_merge(['_token', '_method', 'media'], $this->files)) as $key => $value) {
            Settings::set($key, $value);
        }

        foreach ($this->files as $file) {
            if ($request->hasFile($file)) {
                Settings::set($file, $file);
                Settings::instance($file)->clearMediaCollection($file);
                Settings::instance($file)->addMediaFromRequest($file)->toMediaCollection($file);
            }
        }

        flash(trans('settings::settings.messages.update_about'))->success();

        return redirect()->back();
    }

    public function map1()
    {
        $about = AboutUs::first();
        $page = "map1";
        return view('settings::settings.tabs.map', compact('about', 'page'));
    }

    public function map2()
    {
        $about = AboutUs::first();
        $page = "map2";
        return view('settings::settings.tabs.map', compact('about', 'page'));
    }
}
