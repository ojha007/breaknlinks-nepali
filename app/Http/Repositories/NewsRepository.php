<?php

namespace App\Http\Repositories;

use App\Interfaces\Repository;
use App\Models\News;

class NewsRepository extends Repository
{
    public function __construct(News $model)
    {
        $this->model = $model;
    }

    public function listAll(array $attributes)
    {
        return [];
    }
}
