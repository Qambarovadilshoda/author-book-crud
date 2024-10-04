@extends('layouts.app')

@section('title', 'Kitoblar CRUD')

@section('content')

<div class="container mt-5">
    <a href="{{route('home')}}" style="font-size: 25px;">Ortga</a>
    <h2 class="mb-4">Kitoblar Ro'yxati
        <a href="{{route('books.create')}}" class="btn btn-primary">Kitob Yaratish</a>

    </h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kitob Nomi</th>
                <th>Tavsif</th>
                <th>Mualliflar</th>
                <th>Amallar</th>
            </tr>
        </thead>
        @foreach ($books as $book)
        <tbody>
            <tr>
                <td>{{$book->title}}</td>
                <td>{{$book->description}}</td>
                <td>
                    @if (!$book->authors->isEmpty())
                    @foreach ($book->authors as $author)
                    {{ $author->name }} @if (!$loop->last), @endif
                    @endforeach
                    @endif
                </td>
                <td>
                    <a href="{{route('books.show', $book->id)}}" class="btn btn-info btn-sm">Ko'rish</a>
                    <a href="{{route('books.edit', $book->id)}}" class="btn btn-warning btn-sm">Tahrirlash</a>
                    <form style="display:inline;" action="{{route('books.destroy', $book->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">O'chirish</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection