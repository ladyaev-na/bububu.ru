<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\ApiException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories)->setStatusCode(200);
    }
    public function store(CategoryRequest $request)
    {
        if (empty($category->id)){
            throw new ApiException('Not found', 404);
        }

        $category = Category::create($request->validated());
        return response()->json($category)->setStatusCode(201);
    }
    public function show(Category $category)
    {
        return response()->json($category)->setStatusCode(200);
    }
    public function update(CategoryRequest $request, Category $category)
    {
        if (empty($category->id)){
            throw new ApiException('Not found', 404);
        }

        $category->update($request->validated());
        return response()->json($category)->setStatusCode(200);
    }
    public function destroy(Category $category)
    {
        if (empty($category->id)){
            throw new ApiException('Not found', 404);
        }

        $category->delete();
        return response()->json(null, 204);
    }
}
