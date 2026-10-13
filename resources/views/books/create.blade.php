@extends('layouts.app')

@section('title', $title)

@section('content')
    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <input type="text" name="title" placeholder="judul buku">
        <input type="text" name="author" placeholder="penulis">
        <input type="number" name="year" placeholder="tahun">
        <input type="number" name="stock" placeholder="stok">

        <button type="submit">
        Simpan
     </button>
    </form>
@endsection