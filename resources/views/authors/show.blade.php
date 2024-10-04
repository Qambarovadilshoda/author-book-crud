@extends('layouts.app')
@section('title', 'Muallif Haqida Ma\'lumot')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Muallif: {{$author->name}}
        <a class="text-danger" href="{{route('authors.index')}}" style="margin-left: 10px;">Ortga</a>
    </h2>

    <div class="mb-3">
        <h5>Biografiya:</h5>
        <p>{{$author->bio}}</p>
    </div>

    <div class="mb-3">
        <h5>Yozgan Kitoblar:</h5>
        <ul>
            @if (!empty($author->books))
            @foreach ($author->books as $book)
            <li>{{$book->title}}</li>
            @endforeach
            @endif
            <!-- Dinamik ravishda kitoblar ro'yxatini qo'shish -->
        </ul>
    </div>

    <div>
        <a href="{{route('authors.edit', $author->id)}}" class="btn btn-warning">Muallifni Tahrirlash</a>
        <form style="display:inline;" action="{{route('authors.destroy', $author->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Muallifni O'chirish</button>
        </form>
    </div>
</div>
@endsection