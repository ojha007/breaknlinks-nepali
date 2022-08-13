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

    public function selectParentOnly()
    {
        return $this->getModel()
            ->whereNull('parent_id')
            ->get()
            ->mapWithKeys(function ($category) {
                return [
                    $category->slug => $category->title
                ];
            });

    }

    public function selectAll()
    {
        return $this->getModel()->orderBy('order', 'ASC')
            ->get()
            ->mapWithKeys(function ($category) {
                return [
                    $category->id => $category->title
                ];
            });
    }

    public function getByOrder()
    {
        return $this->getModel()->orderBy('order', 'ASC')
            ->get()
            ->mapWithKeys(function ($category) {
                return [
                    $category->order => $category->title
                ];
            });
    }
}
