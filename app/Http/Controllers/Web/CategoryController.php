<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\CategoryRequest;
use App\Models\Category;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;

// добавляем пространство имен для политики
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CategoryController extends Controller
{
    // добавляем трейд для политики
    use AuthorizesRequests;
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
    public function create()
    {
        $this->authorize('create', Category::class);

        return view('categories.create');
    }
    public function store(CategoryRequest $request)
    {
        $this->authorize('create', Category::class);

        $category = Category::create($request->validated());
        return redirect()->route('categories.index');
    }
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        $category->update($request->validated());
        return redirect()->route('categories.index');
    }
    public function destroy(Category $category)
    {
        $this->authorize('delete', $category);

        $category->delete();
        return redirect()->route('category.index');
    }
}
