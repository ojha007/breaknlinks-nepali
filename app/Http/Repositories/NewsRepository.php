<?php

namespace App\Http\Repositories;

use App\Interfaces\Repository;
use App\Models\News;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
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
}
