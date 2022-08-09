<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Repositories\NewsRepository;

class NewsController extends Controller
{

    /**
     * @var string
     */
    protected $viewPath = 'backend.news.';


    protected $repository;

    /**
     * @param NewsRepository $repository
     */
    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {

        $query = [];
        $news = $this->repository->listAll($query);
        return view($this->viewPath . 'index', compact('news'));
    }

    public function create()
    {
        return view($this->viewPath . 'create');
    }
}
