<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Menampilkan daftar produk di dashboard
    public function index()
    {
        $products = Product::all(); // Mengambil semua data produk
        return view('dashboard.products.index', compact('products')); // Mengirim data ke view 'dashboard.index'
    }

    // Menyimpan produk
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'brand' => 'required|string|max:255',
            'desk' => 'required|string|max:255',
        ]);

        // Menyimpan file gambar ke direktori 'public/products'
        $path = $request->file('image')->store('products', 'public');

        // Membuat data produk baru
        Product::create([
            'image' => $path,
            'brand' => $request->brand,
            'desk' => $request->desk,
        ]);

        // Redirect setelah berhasil menyimpan produk
        return redirect()->route('dashboard')->with('success', 'Product added successfully!');
    }

    // Menampilkan form edit produk
    public function edit($id)
    {
        $product = Product::findOrFail($id); // Cari data berdasarkan ID
        return view('dashboard.products.edit', compact('product')); // Kirim data ke view 'edit'
    }

    // Mengupdate data produk
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id); // Cari data berdasarkan ID

        // Validasi input
        $validated = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'brand' => 'required|string|max:255',
            'desk' => 'required|string|max:255',
        ]);

        // Update gambar jika ada file baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($product->image) {
                \Storage::delete('public/' . $product->image);
            }
            $path = $request->file('image')->store('products', 'public');
            $product->image = $path;
        }

        // Update data produk lainnya
        $product->brand = $request->brand;
        $product->desk = $request->desk;
        $product->save();

        return redirect()->route('dashboard')->with('success', 'Product updated successfully!');
    }

    // Menghapus produk
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Hapus gambar jika ada
        if ($product->image) {
            \Storage::delete('public/' . $product->image);
        }

        // Hapus data produk
        $product->delete();

        return redirect()->route('dashboard')->with('success', 'Product deleted successfully!');
    }
}
