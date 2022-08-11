<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Repositories\CategoryRepository;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Throwable;

class CategoryController extends Controller
{
    /**
     * @var string
     */
    protected $viewPath = 'backend.category.';
    /**
     * @var string
     */
    protected $baseRoute = 'admin.categories.';
    /**
     * @var CategoryRepository
     */
    protected $repository;

    public function __construct(CategoryRepository $repository)
    {

        $this->repository = $repository;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $allCategories = $this->repository->getAll();
        $parentCategories = $this->repository->selectParentOnly();
        $category = [];
        return view($this->viewPath . 'index', compact('allCategories', 'parentCategories', 'category'));
    }

    /**
     * @param Category $category
     * @return Application|Factory|View
     */
    public function edit(Category $category)
    {
        $allCategories = $this->repository->getAll();
        $parentCategories = $this->repository->selectParentOnly();
        return view($this->viewPath . 'index', compact('allCategories', 'parentCategories', 'category'));
    }

    /**
     * @param CategoryRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryRequest $request): RedirectResponse
    {
        try {
            $attributes = $request->validated();
            $this->repository->create($attributes);
            return redirect()
                ->route($this->baseRoute . 'index')
                ->with('success', 'Category added successfully');
        } catch (Throwable $exception) {
            dd($exception);
            Log::error($exception->getMessage() . '--' . $exception->getTraceAsString());
            return redirect()
                ->back()
                ->withInput()
                ->with('failed', 'Whoops! Unable to add Category.Try again!');
        }
    }
}
