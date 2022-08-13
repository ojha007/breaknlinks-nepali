<?php

namespace App\Http\Repositories;

use App\Interfaces\Repository;
use App\Models\News;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class NewsRepository extends Repository
{
    public function __construct(News $model)
    {
        $this->model = $model;
    }

    public function listAll(array $attributes): LengthAwarePaginator
    {
        return DB::table('news as ne')
            ->select('ne.id', 'ne.title', 'c.title as category', 'publish_date',
                'view_count', 'u.name as created_by', 'publish_date',
                'ue.name as updated_by', 'ud.name as deleted_by')
            ->join('users as u', 'u.id', '=', 'ne.created_by')
            ->leftJoin('users as ue', 'ue.id', '=', 'ne.updated_by')
            ->leftJoin('users as ud', 'ud.id', '=', 'ne.deleted_by')
            ->join('categories as c', 'ne.category_id', '=', 'c.id')
            ->when(isset($attributes['category_id']), function ($q) use ($attributes) {
                $q->where('category_id', '=', $attributes['category_id']);
            })
            ->when(!$attributes['deleted_at'], function ($q) use ($attributes) {
                $q->whereNull('deleted_at');
            })->when($attributes['deleted_at'], function ($q) use ($attributes) {
                $q->whereNotNull('deleted_at');
            })
            ->orderByDesc('publish_date')
            ->paginate($attributes['paginate'] ?? 30);
    }

    public function getCacheNewsByOrder($order, $limit = 10,$cache_name): Collection
    {
        return Cache::remember('_' . $cache_name, 4800, function () use ($order, $limit) {
            return $this->getNewsByOrder($order, $limit);
        });

    }

    public function getNewsByOrder($order, $limit = 10): Collection
    {
        return DB::table('news as ne')
            ->select('ne.id', 'ne.title', 'ne.image', 'date_line', 'ne.description')
//            ->join('authors as a', 'a.id', '=', 'ne.guest_id')
//            ->join('categories as c', function ($q) use ($order) {
//                $q->on('ne.category_id', '=', 'c.id')
//                    ->where('c.order', '=', $order);
//            })
//            ->where('publish_date', '<', now())
            ->whereNull('deleted_at')
            ->orderByDesc('publish_date')
            ->limit($limit)
            ->get();
    }


    public function getAnchorNews($limit = 5): Collection
    {
        return DB::table('news as ne')
            ->select('ne.id', 'ne.title', 'ne.image', 'date_line', 'a.name as author', 'sub_description', 'date_line')
            ->join('authors as a', 'a.id', '=', 'ne.guest_id')
            ->where('is_anchor', '=', '1')
            ->whereNull('deleted_at')
            ->orderByDesc('publish_date')
            ->limit($limit)
            ->get();

    }
}
