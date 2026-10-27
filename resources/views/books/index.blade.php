@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    
    <a href="{{ route('books.create') }}">Tambah Buku</a>

    <ul>
        @foreach($books as $book)
                <h3>{{ $book->title }}<small>({{ $book->category?->name ?? 'Belum ada kategory' }})</small></h3>
                <P>penulis: {{ $book->author }}</P>
                <P>Tahun: {{ $book->year }}</P>
                <P>Stok: {{ $book->stock }}</P>
                <a href="{{ route('books.show', $book) }}">Detail </a>
                <a href="{{ route('books.edit', $book) }}">Edit buku </a>
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
        @endforeach
    </ul>
@endsection