<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Repositories\CategoryRepository;
use App\Http\Repositories\NewsRepository;
use App\Http\Requests\NewsRequest;
use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{

    /**
     * @var string
     */
    protected $viewPath = 'backend.news.';

    /**
     * @var string
     */
    protected $baseRoute = 'admin.news.';


    protected $repository;
    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    /**
     * @param NewsRepository $repository
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(NewsRepository $repository, CategoryRepository $categoryRepository)
    {
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {

        $query = [];
        $news = $this->repository->listAll($query);
        return view($this->viewPath . 'index', compact('news'));
    }

    public function create()
    {
        $categories = $this->categoryRepository->selectAll();
        return view($this->viewPath . 'create',compact('categories'));
    }

    public function store(NewsRequest $request)
    {
        try {
            $attributes = $request->validated();
            $this->repository->create($attributes);
            return redirect()
                ->route($this->baseRoute . 'index')
                ->with('success', 'News added successfully');
        } catch (\Throwable $exception) {
            Log::error($exception->getMessage() . '--' . $exception->getTraceAsString());

        }
    }
}
