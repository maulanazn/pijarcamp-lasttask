@extends('welcome')

@section('title')
    <title>Add Product</title>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
    <form action="{{ route('add_product') }}" method="post">
        @csrf
        <input type="text" name="nama_produk" required placeholder="Nama produk"><br>
        @error('nama_produk')
            <p>
                {{ $message }}
            </p>
        @enderror

        <textarea required name="keterangan" id="" cols="30" rows="10" placeholder="Deskripsi produk"></textarea><br>
        @error('keterangan')
            <p>
                {{ $message }}
            </p>
        @enderror

        <input type="number" required name="harga" placeholder="Harga produk"><br>
        @error('harga')
            <p>
                {{ $message }}
            </p>
        @enderror

        <input type="number" required name="jumlah" placeholder="Jumlah produk"><br>
        @error('jumlah')
            <p>
                {{ $message }}
            </p>
        @enderror

        <input type="submit" value="Tambah Produk +">
    </form>
    <a href="{{ route('root') }}" role="button">Kembali ke halaman awal</a>
@endsection