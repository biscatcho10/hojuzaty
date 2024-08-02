<?php

namespace Modules\Destinations\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Modules\Destinations\Entities\Destination;
use Modules\Destinations\Http\Requests\DestinationRequest;
use Modules\Destinations\Repositories\DestinationRepository;

class DestinationsController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var DestinationRepository
     */
    private $repository;

    /**
     * CountryController constructor.
     *
     * @param DestinationRepository $repository
     */
    public function __construct(DestinationRepository $repository)
    {
        $this->middleware('permission:read_destinations')->only(['index']);
        $this->middleware('permission:create_destinations')->only(['create', 'store']);
        $this->middleware('permission:update_destinations')->only(['edit', 'update']);
        $this->middleware('permission:delete_destinations')->only(['destroy']);
        $this->middleware('permission:show_destinations')->only(['show']);

        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $destinations = $this->repository->all();

        return view('destinations::destinations.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('destinations::destinations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DestinationRequest $request
     * @return RedirectResponse
     */
    public function store(DestinationRequest $request)
    {
        $destination = $this->repository->create($request->all());

        flash(trans('destinations::destinations.messages.created'))->success();

        return redirect()->route('dashboard.destinations.show', $destination);
    }

    /**
     * Display the specified resource.
     *
     * @param Destination $destination
     * @return View
     */
    public function show(Destination $destination)
    {
        $destination = $this->repository->find($destination);

        return view('destinations::destinations.show', compact('destination'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Destination $destination
     * @return View
     */
    public function edit(Destination $destination)
    {
        return view('destinations::destinations.edit', compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DestinationRequest $request
     * @param Destination $destination
     * @return RedirectResponse
     */
    public function update(DestinationRequest $request, Destination $destination)
    {
        $destination = $this->repository->update($destination, $request->all());

        flash(trans('destinations::destinations.messages.updated'))->success();

        return redirect()->route('dashboard.destinations.show', $destination);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Destination $destination
     * @return RedirectResponse
     */
    public function destroy(Destination $destination)
    {
        $this->repository->delete($destination);

        flash(trans('destinations::destinations.messages.deleted'))->error();

        return redirect()->route('dashboard.destinations.index');
    }
}
