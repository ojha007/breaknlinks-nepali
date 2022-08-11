<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Repositories\AuthorRepository;
use App\Http\Repositories\CategoryRepository;
use App\Http\Repositories\NewsRepository;
use App\Http\Requests\NewsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
     * @var AuthorRepository
     */
    private $authorRepository;

    /**
     * @param NewsRepository $repository
     * @param CategoryRepository $categoryRepository
     * @param AuthorRepository $authorRepository
     */
    public function __construct(NewsRepository $repository, CategoryRepository $categoryRepository,AuthorRepository $authorRepository)
    {
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
        $this->authorRepository = $authorRepository;
    }

    public function index(Request $request)
    {
        $query = ['deleted_at' => false];
        $query += $request->query();
        $allNews = $this->repository->listAll($query);
        $categories = $this->categoryRepository->selectAll();
        return view($this->viewPath . 'index', compact('allNews', 'categories'));
    }

    public function create()
    {
        $categories = $this->categoryRepository->selectAll();
        $guests = $this->authorRepository->selectAll('guest');
        $reporters = $this->authorRepository->selectAll('reporter');
        return view($this->viewPath . 'create', compact('categories', 'guests', 'reporters'));
    }

    public function store(NewsRequest $request): RedirectResponse
    {
        try {
            $attributes = $request->validated();
            $this->repository->create($attributes);
            return redirect()
                ->route($this->baseRoute . 'index')
                ->with('success', 'News added successfully');
        } catch (\Throwable $exception) {
            Log::error($exception->getMessage() . '--' . $exception->getTraceAsString());
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Whoops! Unable to add news.Try again.');

        }
    }

    public function destroy($id): RedirectResponse
    {
        $this->repository->delete($id);
        return redirect()
            ->route($this->baseRoute . 'index')
            ->with('success', 'News deleted successfully.You can recover news from archive section.');

    }


    public function archive(Request $request)
    {
        $query = ['deleted_at' => true];
        $query += $request->query();
        $allNews = $this->repository->listAll($query);
        $categories = $this->categoryRepository->selectAll();
        return view($this->viewPath . 'index', compact('allNews', 'categories'));
    }

    public function restore($id): RedirectResponse
    {
        $this->repository->restore($id);
        return redirect()
            ->back()
            ->with('success', 'News successfully restore .You can now view news on list section.');
    }
}
