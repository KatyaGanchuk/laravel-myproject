@extends('layouts.layout')

@section('content')
    <h1>Перегляд продукту</h1>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">{{ $product->name }}</h2>
            <p class="card-text"><strong>Опис:</strong> {{ $product->description }}</p>
            <p class="card-text"><strong>Ціна:</strong> {{ $product->price }} грн</p>
            <p class="card-text"><strong>Виробник:</strong> {{ $product->manufacturer }}</p>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Назад</a>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Редагувати</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Видалити</button>
            </form>
        </div>
    </div>
@endsection
