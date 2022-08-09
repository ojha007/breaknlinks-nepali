<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Repositories\CategoryRepository;

class CategoryController extends Controller
{
    protected $viewPath = 'backend.category.';
    /**
     * @var CategoryRepository
     */
    protected $repository;

    public function __construct(CategoryRepository $repository)
    {

        $this->repository = $repository;
    }

    public function index()
    {
        $categories = $this->repository->getAll();
        return view($this->viewPath . 'index', compact('categories'));
    }
}
