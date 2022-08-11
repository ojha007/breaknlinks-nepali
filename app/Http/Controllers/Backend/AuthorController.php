<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Repositories\AuthorRepository;
use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use Illuminate\Http\RedirectResponse;

class AuthorController extends Controller
{

    /**
     * @var AuthorRepository
     */
    protected $repository;
    /**
     * @var string
     */
    private $viewPath = 'backend.author.';

    /**
     * @param AuthorRepository $repository
     */
    public function __construct(AuthorRepository $repository)
    {

        $this->repository = $repository;
    }

    public function index()
    {

        $authors = $this->repository->paginate(30);
        $types = $this->repository->getModel()::types();
        $author = null;
        return view($this->viewPath . 'index', compact('authors', 'types', 'author'));
    }

    public function store(AuthorRequest $request): RedirectResponse
    {

        $attribute = $request->validated();
        $attribute['image'] = '';
        $this->repository->create($attribute);
        return redirect()
            ->back()
            ->with('success', 'Author created successfully.');
    }

    public function update(AuthorRequest $request, $id): RedirectResponse
    {

        $attribute = $request->validated();
        $this->repository->update($id, $attribute);
        return redirect()
            ->route('admin.authors.index')
            ->with('success', 'Author detail updated successfully.');
    }

    public function edit(Author $author)
    {
        $authors = $this->repository->paginate(30);
        $types = $this->repository->getModel()::types();
        return view($this->viewPath . 'index', compact('authors', 'types', 'author'));
    }
}
