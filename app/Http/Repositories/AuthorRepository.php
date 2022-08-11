<?php

namespace App\Http\Repositories;

use App\Interfaces\Repository;
use App\Models\Author;

class AuthorRepository extends Repository
{

    protected $model;

    /**
     * @param Author $model
     */
    public function __construct(Author $model)
    {

        $this->model = $model;
    }

    public function selectAll($type)
    {
        return $this->getModel()
            ->where('type', $type)
            ->get()
            ->mapWithKeys(function ($a) {
                return [$a->id => $a->name];
            });
    }
}
