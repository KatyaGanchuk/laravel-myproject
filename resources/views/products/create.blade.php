@extends('layouts.layout')

@section('content')
    <h1>Додати новий продукт</h1>

    <form action="{{ route('products.store') }}" method="POST">
    @csrf
    
    <div class="form-group">
        <label for="name">Назва:</label>
        <input type="text" name="name" class="form-control" placeholder="Введіть назву продукту" value="{{ old('name') }}">
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Опис:</label>
        <textarea name="description" class="form-control" placeholder="Введіть опис продукту">{{ old('description') }}</textarea>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="price">Ціна:</label>
        <input type="text" name="price" class="form-control" placeholder="Введіть ціну продукту" value="{{ old('price') }}">
        @error('price')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="manufacturer">Виробник:</label>
        <input type="text" name="manufacturer" class="form-control" placeholder="Введіть назву виробника" value="{{ old('manufacturer') }}">
        @error('manufacturer')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Додати продукт</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Назад</a>
</form>
@endsection
