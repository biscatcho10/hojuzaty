<?php

namespace Modules\Destinations\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Modules\Destinations\Entities\Destination;
use Modules\Destinations\Entities\Place;
use Modules\Destinations\Http\Requests\PlaceRequest;
use Modules\Destinations\Repositories\PlacesRepository;

class PlacesController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var PlacesRepository
     */
    private $repository;

    /**
     * CountryController constructor.
     *
     * @param PlacesRepository $repository
     */
    public function __construct(PlacesRepository $repository)
    {
        $this->middleware('permission:read_places')->only(['index']);
        $this->middleware('permission:create_places')->only(['create', 'store']);
        $this->middleware('permission:update_places')->only(['edit', 'update']);
        $this->middleware('permission:delete_places')->only(['destroy']);
        $this->middleware('permission:show_places')->only(['show']);

        $this->repository = $repository;
    }


    /**
     * Display a listing of the resource.
     * @param Destination $destination
     * @return View
     */
    public function index(Destination $destination)
    {
        $places = $this->repository->all($destination);

        return view('destinations::places.index', get_defined_vars());
    }


    /**
     * Show the form for creating a new resource.
     * @param Destination $destination
     * @return View
     */
    public function create(Destination $destination)
    {
        return view('destinations::places.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     * @param Destination $destination
     * @param PlaceRequest $request
     * @return RedirectResponse
     */
    public function store(PlaceRequest $request, Destination $destination)
    {
        $place = $this->repository->create($destination, $request->all());

        flash(trans('destinations::places.messages.created'))->success();

        return redirect()->route('dashboard.places.show', [$destination, $place]);
    }

    /**
     * Display the specified resource.
     *
     * @param Destination $destination
     * @param Place $place
     * @return View
     */
    public function show(Destination $destination, Place $place)
    {
        $place = $this->repository->find($place);

        return view('destinations::places.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Destination $destination
     * @param Place $place
     * @return View
     */
    public function edit(Destination $destination, Place $place)
    {
        return view('destinations::places.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PlaceRequest $request
     * @param Destination $destination
     * @param Place $place
     * @return RedirectResponse
     */
    public function update(PlaceRequest $request, Destination $destination, Place $place)
    {
        $place = $this->repository->update($place, $request->all());

        flash(trans('destinations::places.messages.updated'))->success();

        return redirect()->route('dashboard.places.show', [$destination, $place]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Destination $destination
     * @param Place $place
     * @return RedirectResponse
     */
    public function destroy(Destination $destination, Place $place)
    {
        $this->repository->delete($place);

        flash(trans('destinations::places.messages.deleted'))->error();

        return redirect()->route('dashboard.destinations.show', $destination);
    }
}
