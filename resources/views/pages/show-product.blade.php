@extends('welcome')

@section('title')
    <title>This is {{ $produk->nama_produk }}</title>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/product-show.css') }}">
@endpush

@section('content')
    <h1 id="title">This is {{ $produk->nama_produk }}</h1>
    
    <div id="produk">
        <p>{{ $produk->nama_produk }}</p>
        <p>{{ $produk->keterangan }}</p>
        <p>{{ $produk->harga }}</p>
        <p>{{ $produk->jumlah }}</p>
    </div>

    <a href="{{ route('edit_product_view', $produk->id) }}" role="button">Edit produk</a>
    <a href="{{ route('root') }}" role="button">Kembali ke halaman awal</a>
@endsection