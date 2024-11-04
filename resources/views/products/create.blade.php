@extends('layouts.layout')

@section('content')
    <h1>Додати новий продукт</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Увага!</strong> Виникли деякі проблеми з введенням.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Назва:</label>
            <input type="text" name="name" class="form-control" placeholder="Введіть назву продукту">
        </div>
        <div class="form-group">
            <label for="description">Опис:</label>
            <textarea name="description" class="form-control" placeholder="Введіть опис продукту"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Ціна:</label>
            <input type="text" name="price" class="form-control" placeholder="Введіть ціну продукту">
        </div>
        <div class="form-group">
            <label for="manufacturer">Виробник:</label>
            <input type="text" name="manufacturer" class="form-control" placeholder="Введіть назву виробника">
        </div>
        <button type="submit" class="btn btn-success">Додати продукт</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Назад</a>
    </form>
@endsection
