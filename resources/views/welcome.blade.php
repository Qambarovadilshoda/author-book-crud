@extends('layouts.app')
@section('title', 'Bosh Sahifa')

@section('content')

<div class="container mt-5">
        <h2 class="mb-4">Dashboard</h2>

        <div class="row">
            <!-- Kitoblar CRUD tugmasi -->
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Kitoblar CRUD</h5>
                        <p class="card-text">Kitoblarni boshqarish (qo'shish, tahrirlash, o'chirish).</p>
                        <a href="{{route('books.index')}}" class="btn btn-primary">Kitoblar</a>
                    </div>
                </div>
            </div>

            <!-- Mualliflar CRUD tugmasi -->
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Mualliflar CRUD</h5>
                        <p class="card-text">Mualliflarni boshqarish (qo'shish, tahrirlash, o'chirish).</p>
                        <a href="{{route('authors.index')}}" class="btn btn-primary">Mualliflar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection