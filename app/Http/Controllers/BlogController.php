<?php

namespace App\Http\Controllers;

use App\Http\Services\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index(Request $request)
    {
        return $this->blogService->index($request);
    }

    public function show($id)
    {
        return $this->blogService->show($id);
    }

    public function store(Request $request)
    {
        return $this->blogService->store($request);
    }

    public function update(Request $request, $id)
    {
        return $this->blogService->update($request, $id);
    }

    public function delete($id)
    {
        return $this->blogService->delete($id);
    }
}