@extends('layouts.layout')

@section('title', 'Категория товара')

@section('content')
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Категории товаров</h2>
        <a href="{{ route('categories.create') }}" class="bg-blue-500 text-red px-4 py-2 rounded hover:bg-blue-700">Добавить категорию</a>

        <div class="grid grid-cols-1 gap-4 mt-6">
            @foreach($categories as $category)
                <div class="bg-white shadow-lg rounded-lg p-4 flex items-center justify-between">
                    <div class="text-lg font-semibold">{{ $category->name }}</div>
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('categories.show', $category->id) }}" class="text-blue-500 hover:text-blue-700" title="Посмотреть">
                            <img src="{{ asset('assets/images/show.png') }}" alt="Посмотреть" class="w-6 h-6">
                        </a>
                        <a href="{{ route('categories.edit', $category->id) }}" class="text-yellow-500 hover:text-yellow-700" title="Редактировать">
                            <img src="{{ asset('assets/images/edit.png') }}" alt="Редактировать" class="w-6 h-6">
                        </a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="post" class="inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="text-red-500 hover:text-red-700" title="Удалить">
                                <img src="{{ asset('assets/images/delete.png') }}" alt="Удалить" class="w-6 h-6">
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
