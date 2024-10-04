@extends('layouts.app')

@section('title', 'Mualliflar CRUD')
@section('content')

<div class="container mt-5">
    <a href="{{route('home')}}" style="font-size: 25px;">Ortga</a>

    <h2 class="mb-4">Mualliflar Ro'yxati</h2>

    <a href="{{route('authors.create')}}" class="btn btn-success mb-3">Yangi Muallif Qo'shish</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Muallif Nomi</th>
                <th>Email</th>
                <th>Amallar</th>
            </tr>
        </thead>
        @foreach ($authors as $author)
        <tbody>
            <!-- Dinamik mualliflar ro'yxati -->
            <tr>
                <td>{{$author->name}}</td>
                <td>{{$author->email}}</td>
                <td>
                    <a href="{{route('authors.show', $author->id)}}" class="btn btn-info btn-sm">Ko'rish</a>
                    <a href="{{route('authors.edit', $author->id)}}" class="btn btn-warning btn-sm">Tahrirlash</a>
                    <form style="display: inline;" action="{{route('authors.destroy', $author->id)}}" method="POST">
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