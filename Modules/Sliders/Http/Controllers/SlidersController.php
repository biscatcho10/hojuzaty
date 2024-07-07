<?php

namespace Modules\Sliders\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Modules\Sliders\Entities\Slider;
use Modules\Sliders\Http\Requests\SlidersRequest;
use Modules\Sliders\Repositories\SlidersRepository;

class SlidersController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var SlidersRepository
     */
    private $repository;

    /**
     * CountryController constructor.
     * @param SlidersRepository $repository
     */
    public function __construct(SlidersRepository $repository)
    {
        $this->middleware('permission:read_sliders')->only(['index']);
        $this->middleware('permission:create_sliders')->only(['create', 'store']);
        $this->middleware('permission:update_sliders')->only(['edit', 'update']);
        $this->middleware('permission:delete_sliders')->only(['destroy']);
        $this->middleware('permission:show_sliders')->only(['show']);

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

        return view('sliders::sliders.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('sliders::sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param SlidersRequest $request
     */
    public function store(SlidersRequest $request)
    {
        $slider = $this->repository->create($request->all());

        flash(trans('sliders::sliders.messages.created'))->success();

        return redirect()->route('dashboard.sliders.show', $slider);
    }

    /**
     * Display the specified resource.
     *
     * @param Slider $slider
     * @return View
     */
    public function show(Slider $slider)
    {
        $slider = $this->repository->find($slider);

        return view('sliders::sliders.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Slider $slider
     * @return View
     */
    public function edit(Slider $slider)
    {
        return view('sliders::sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SlidersRequest $request
     */
    public function update(SlidersRequest $request, Slider $slider)
    {
        $sliders = $this->repository->update($slider, $request->all());

        flash(trans('sliders::sliders.messages.updated'))->success();

        return redirect()->route('dashboard.sliders.show', $sliders);
    }

    /**
     * Remove the specified resource from storage.
     * @param Slider $slider
     */
    public function destroy(Slider $slider)
    {
        $this->repository->delete($slider);

        flash(trans('sliders::sliders.messages.deleted'))->error();

        return redirect()->route('dashboard.sliders.index');
    }
}
