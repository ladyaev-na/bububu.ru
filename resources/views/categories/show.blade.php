@extends('layouts.layout')
@section('title','Просмотр')

@section('content')
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Просмотр категории</h2>

        <div class="grid grid-cols-1 gap-4 mt-6">
                <div class="bg-white shadow-lg rounded-lg p-4 flex items-center justify-between">
                    <div class="text-lg font-semibold">{{ $category->name }}</div>
                    <div class="flex items-center space-x-4">
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
        </div>
    </div>
@endsection
