<?php

namespace App\Http\Repositories;

use App\Interfaces\Repository;
use App\Models\Category;

class CategoryRepository extends Repository
{

    protected $model;

    public function __construct(Category $model)
    {

        $this->model = $model;
    }
}
