@extends('layouts.app')

@section('title', 'Muallifni Tahrirlash')

@section('content')

<div class="container mt-5">
        <h2 class="mb-4">Muallifni Tahrirlash
            <a class="text-danger" href="./index.html" style="margin-left: 10px;">Ortga</a>
        </h2>

        <form  action="{{route('authors.update', $author->id)}}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" id="author_id" name="author_id" value="{{$author->id}}"> 

            <div class="mb-3">
                <label for="name" class="form-label">Muallif Ismi</label>
                <input type="text" class="form-control"  name="name" placeholder="Muallif ismini kiriting"
                    value="{{$author->name}}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Muallif Ismi</label>
                <input type="email" class="form-control"  name="email" placeholder="Muallif emailini kiriting"
                    value="{{$author->email}}" required>
            </div>

            <div class="mb-3">
                <label for="bio" class="form-label">Muallif Biografiyasi</label>
                <textarea class="form-control" name="bio" rows="3"
                    placeholder="Muallif biografiyasini kiriting" required>{{$author->bio}}</textarea>
            </div>

            <div class="mb-3">
                <label for="books" class="form-label">Kitoblarni Tanlang</label>
                <select class="form-select"  name="books[]" multiple>
                    @foreach ($books as $book) 
                        <option value="{{$book->id}}" selected>{{$book->title}}</option>
                    @endforeach
                </select>
                <div class="form-text">Bir nechta kitob tanlash uchun <strong>CTRL</strong> tugmasini bosib turib
                    tanlang.</div>
            </div>

            <button type="submit" class="btn btn-primary">Tahrirlash</button>
        </form>
    </div>
@endsection
