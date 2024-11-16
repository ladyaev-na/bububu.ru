<form action="{{ $action }}" method="post" enctype="application/x-www-form-urlencoded" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    @if($method != 'post')
        @method($method)
    @endif

    <div class="mb-4">
        <label for="category_name" class="block text-gray-700 text-sm font-bold mb-2">
            Наименование категории
        </label>
        <input id="category_name" type="text" name="name" value="{{ $category->name ?? old('name') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>

    <div class="flex items-center justify-between">
        <button title="Сохранить" class="bg-blue-500 hover:bg-blue-700 text-red font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Сохранить
        </button>
    </div>
</form>
