@extends('welcome')

@section('title')
    <title>This is all product</title>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
    <nav>
        <a href="{{ route('add_product_view') }}">Tambah Produk</a>
    </nav>

    <h1 id="title">Produk</h1>
    <div id="produk-semua">
        <hr>
        @foreach ($produk as $p)    
            <p>{{ $p->nama_produk }}</p>
            <p>{{ $p->keterangan }}</p>
            <p>{{ $p->harga }}</p>
            <p>{{ $p->jumlah }}</p>
            <nav>
                <a href="{{ route('show_product', $p->id) }}">Lihat Produk</a>
            </nav>
            <hr>
        @endforeach
    </div>
@endsection