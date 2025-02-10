@extends('layouts.app')

@section('content')
    <h1 class="text-center my-4">Danh sách Sách</h1>
    <div class="row">
        @foreach($books as $book)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <img src="{{ $book->thumbnail }}" class="card-img-top" alt="Ảnh sách">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">Tác giả: {{ $book->author }}</p>
                        <p class="card-text">Giá: <strong class="text-danger">{{ number_format($book->price) }} VND</strong></p>
                        <a href="{{ url('/books/' . $book->id) }}" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
