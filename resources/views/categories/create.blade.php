@extends('layouts.layout')

@section('title', 'Добавление категорий')

@section('content')
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Добавление категории</h2>
        @include('categories.form', ['action' => route('categories.store'), 'method' => 'post'])
    </div>
@endsection
