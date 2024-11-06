@extends('layouts.layout')

@section('content')
    <h1>Редагувати продукт</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Назва:</label>
            <input type="text" name="name" value="{{ old('name', $product->name) }}" class="form-control" placeholder="Введіть назву продукту">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Опис:</label>
            <textarea name="description" class="form-control" placeholder="Введіть опис продукту">{{ old('description', $product->description) }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="price">Ціна:</label>
            <input type="text" name="price" value="{{ old('price', $product->price) }}" class="form-control" placeholder="Введіть ціну продукту">
            @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="manufacturer">Виробник:</label>
            <input type="text" name="manufacturer" value="{{ old('manufacturer', $product->manufacturer) }}" class="form-control" placeholder="Введіть назву виробника">
            @error('manufacturer')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Оновити продукт</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Назад</a>
    </form>
@endsection
