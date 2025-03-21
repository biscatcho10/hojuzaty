<?php

namespace Modules\News\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Modules\News\Entities\News;
use Modules\News\Http\Requests\NewsRequest;
use Modules\News\Repositories\NewsRepository;

class NewsController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * @var NewsRepository
     */
    private $repository;

    /**
     * CountryController constructor.
     * @param NewsRepository $repository
     */
    public function __construct(NewsRepository $repository)
    {
        $this->middleware('permission:read_news')->only(['index']);
        $this->middleware('permission:create_news')->only(['create', 'store']);
        $this->middleware('permission:update_news')->only(['edit', 'update']);
        $this->middleware('permission:delete_news')->only(['destroy']);
        $this->middleware('permission:show_news')->only(['show']);

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

        return view('news::news.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('news::news.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param NewsRequest $request
     */
    public function store(NewsRequest $request)
    {
        $news = $this->repository->create($request->all());

        flash(trans('news::news.messages.created'))->success();

        return redirect()->route('dashboard.news.show', $news);
    }

    /**
     * Display the specified resource.
     *
     * @param News $news
     * @return View
     */
    public function show(News $news)
    {
        $news = $this->repository->find($news);

        return view('news::news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param News $news
     * @return View
     */
    public function edit(News $news)
    {
        return view('news::news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NewsRequest $request
     */
    public function update(NewsRequest $request, News $news)
    {
        $news = $this->repository->update($news, $request->all());

        flash(trans('news::news.messages.updated'))->success();

        return redirect()->route('dashboard.news.show', $news);
    }

    /**
     * Remove the specified resource from storage.
     * @param News $news
     */
    public function destroy(News $news)
    {
        $this->repository->delete($news);

        flash(trans('news::news.messages.deleted'))->error();

        return redirect()->route('dashboard.news.index');
    }
}
