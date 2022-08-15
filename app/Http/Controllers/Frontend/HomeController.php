<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Repositories\CategoryRepository;
use App\Http\Repositories\NewsRepository;

class HomeController extends Controller
{
    /**
     * @var NewsRepository
     */
    protected $newsRepository;
    /**
     * @var CategoryRepository
     */
    protected $categoryRepository;

    /**
     * @param NewsRepository $newsRepository
     */
    public function __construct(NewsRepository $newsRepository, CategoryRepository $categoryRepository)
    {
        $this->newsRepository = $newsRepository;
        $this->categoryRepository = $categoryRepository;
    }


    public function index()
    {
        $categories = $this->categoryRepository->getByOrder();
        $order1News = $this->newsRepository->getCacheNewsByOrder(1, 10);
        $order2News = $this->newsRepository->getCacheNewsByOrder(2, 10);
        $order3News = $this->newsRepository->getCacheNewsByOrder(3, 10);
        $order4News = $this->newsRepository->getCacheNewsByOrder(4, 10);
        $order5News = $this->newsRepository->getCacheNewsByOrder(5, 10);
        $order6News = $this->newsRepository->getCacheNewsByOrder(6, 10);
        $order7News = $this->newsRepository->getCacheNewsByOrder(7, 10);
        $order8News = $this->newsRepository->getCacheNewsByOrder(8, 10);
        $anchorNews = $this->newsRepository->getAnchorNews();
        $trendingNews = $this->newsRepository->getTrendingNews(5);
        return view('frontend.index', compact('order1News',
            'trendingNews',
            'anchorNews',
            'categories',
            'order2News',
            'order3News',
            'order4News',
            'order5News',
            'order6News',
            'order7News',
            'order8News'));
    }
}
