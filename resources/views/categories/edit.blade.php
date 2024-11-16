@extends('layouts.layout')

@section('title', 'Редактирование категорий')

@section('content')
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Редактирование категории</h2>
        @include('categories.form', ['action' => route('categories.update', $category->id), 'method' => 'put'])
    </div>
@endsection
