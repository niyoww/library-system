@extends('layouts.app')

@section('title', $title)

@section('content')
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="title" placeholder="judul buku" value="{{ $book->title }}">
        <input type="text" name="author" placeholder="penulis" value="{{ $book->author }}">
        <input type="number" name="year" placeholder="tahun" value="{{ $book->year }}">
        <input type="number" name="stock" placeholder="stok" value="{{ $book->stock }}">

        <button type="submit">
        Update
     </button>
    </form>
@endsection