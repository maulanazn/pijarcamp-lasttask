@extends('welcome')

@section('title')
    <title>Edit Product</title>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
    <form action="{{ route('edit_product', $produk->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="nama_produk" placeholder="Nama produk" value="{{ $produk->nama_produk }}"><br>
        @error('nama_produk')
            <p>
                {{ $message }}
            </p>
        @enderror

        <textarea name="keterangan" id="" cols="30" rows="10" placeholder="Deskripsi produk">{{ $produk->keterangan }}</textarea><br>
        @error('keterangan')
            <p>
                {{ $message }}
            </p>
        @enderror

        <input type="number" name="harga" placeholder="Harga produk" value="{{ $produk->harga }}"><br>
        @error('harga')
            <p>
                {{ $message }}
            </p>
        @enderror

        <input type="number" name="jumlah" placeholder="Jumlah produk" value="{{ $produk->jumlah }}"><br>
        @error('jumlah')
            <p>
                {{ $message }}
            </p>
        @enderror

        <input type="submit" value="Simpan Produk +">
    </form>
@endsection