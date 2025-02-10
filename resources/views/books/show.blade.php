@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ $book->thumbnail }}" class="img-fluid rounded" alt="Ảnh sách">
            </div>
            <div class="col-md-8">
                <h2>{{ $book->title }}</h2>
                <p><strong>Tác giả:</strong> {{ $book->author }}</p>
                <p><strong>Nhà xuất bản:</strong> {{ $book->publisher }}</p>
                <p><strong>Ngày xuất bản:</strong> {{ $book->publication }}</p>
                <h4 class="text-danger">Giá: {{ number_format($book->price) }} VND</h4>
                <button class="btn btn-success">Mua ngay</button>
            </div>
        </div>
    </div>
@endsection
