@extends('layouts.app')
@section('title', 'Kitob Haqida Ma\'lumot')
@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Kitob: "{{$book->title}}"
        <a class="text-danger" href="{{route('books.index')}}" style="margin-left: 10px;">Ortga</a>
    </h2>

    <div class="mb-3">
        <h5>Tavsif:</h5>
        <p>{{$book->description}}</p>
    </div>

    <div class="mb-3">
        <h5>Mualliflar:</h5>
        <ul>
            @foreach ($book->authors as $author)
                <li>{{$author->name}}</li>
            @endforeach
        </ul>
    </div>

    <div>
        <a href="{{route('books.edit', $book->id)}}" class="btn btn-warning">Kitobni Tahrirlash</a>
        <form style="display: inline;" action="{{route('books.destroy', $book->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">O'chirish</button>
        </form>
    </div>
</div>
@endsection