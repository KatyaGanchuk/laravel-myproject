@extends('layouts.layout')

@section('content')
    <h1>Продукти</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">Додати продукт</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Назва</th>
                <th>Опис</th>
                <th>Ціна</th>
                <th>Виробник</th>
                <th>Дії</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->manufacturer }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Переглянути</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Редагувати</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Видалити</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
