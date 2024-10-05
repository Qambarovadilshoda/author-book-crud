@extends('layouts.app')

@section('title', 'Yangi Muallif Qo\'shish')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Yangi Muallif Qo'shish
        <a class="text-danger" href="{{route('authors.index')}}" style="margin-left: 10px;">Ortga</a>
    </h2>

    <form action="{{route('authors.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Muallif Ismi</label>
            <input type="text" class="form-control" id="name" value="{{old('name')}}" name="name" placeholder="Muallif ismini kiriting" required>
        </div>
        @error('name')
        <p class="help-blok text-danger">{{'*' . $message}}</p>
        @enderror
        <div class="mb-3">
            <label for="email" class="form-label">Muallif Email</label>
            <input type="email" class="form-control" id="name" value="{{old('email')}}" name="email" placeholder="Muallif emailini kiriting" required>
        </div>
        @error('email')
        <p class="help-blok text-danger">{{'*' . $message}}</p>
        @enderror
        <div class="mb-3">
            <label for="bio" class="form-label">Muallif Biografiyasi</label>
            <textarea class="form-control" id="bio" name="bio" rows="3"
                placeholder="Muallif biografiyasini kiriting" required>{{old('bio')}}</textarea>
        </div>
        @error('bio')
        <p class="help-blok text-danger">{{'*' . $message}}</p>
        @enderror
        <button type="submit" class="btn btn-primary">Saqlash</button>
    </form>
</div>
@endsection