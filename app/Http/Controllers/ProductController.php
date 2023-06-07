<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $produk = Produk::all();

        return view('pages.all-product', ['produk' => $produk]);
    }

    public function add_product_view() {
        return view('product-form.add-product');
    }

    public function add_product(Request $request) {
        $request->validate([
            'nama_produk' => ['required', 'string'],
            'keterangan' => ['required', 'string'],
            'harga' => ['required', 'numeric'],
            'jumlah' => ['required', 'numeric']
        ]);

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah
        ]);

        return redirect(route('root'));
    }

    public function edit_product_view($id) {
        $produk = Produk::find($id);

        return view('product-form.edit-product', ['produk' => $produk]);
    }

    public function edit_product(Request $request, $id) {
        $request->validate([
            'nama_produk' => ['string'],
            'keterangan' => ['string'],
            'harga' => ['numeric'],
            'jumlah' => ['numeric']
        ]);

        $produk = Produk::find($id);

        $produk->update([
            'nama_produk' => $request->nama_produk,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah
        ]);

        return redirect(route('root'));
    }

    public function show_product($id) {
        $produk = Produk::find($id);

        return view('pages.show-product', ['produk' => $produk]);
    }

    public function delete_product($id) {
        $produk = Produk::find($id);

        $produk->delete();

        return redirect(route('root'));
    }
}
