<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Repositories\NewsRepository;

class HomeController extends Controller
{
    /**
     * @var NewsRepository
     */
    protected $newsRepository;

    /**
     * @param NewsRepository $newsRepository
     */
    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }


    public function index()
    {
        $order1News = $this->newsRepository->getNewsByOrder(1);
        $anchorNews = $this->newsRepository->getAnchorNews();
//        dd($anchorNews);
        return view('frontend.index', compact('order1News', 'anchorNews'));
    }
}
