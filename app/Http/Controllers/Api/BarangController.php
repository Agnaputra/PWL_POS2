<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BarangModel;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    // Get all products, with their categories
    public function index()
    {
        return BarangModel::with('kategori')->get();
    }

    // Create a new product
    public function store(Request $request)
    {
        // Validate incoming data
        $validator = Validator::make($request->all(), [
            'barang_kode' => 'required|unique:m_barang,barang_kode', // Ensure barang_kode is unique
            'barang_nama' => 'required',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'kategori_id' => 'required|exists:m_kategori,kategori_id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image
        ]);

        // If validation fails, return error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Handle image upload
        $imagePath = $request->file('image')->store('posts', 'public'); // Save image in 'public/posts' directory

        // Create a new product entry
        $barang = BarangModel::create([
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'kategori_id' => $request->kategori_id,
            'image' => $imagePath, // Save image path
        ]);

        // Return success response with product data
        return response()->json($barang, 201);
    }

    // Get a specific product by ID
    public function show(BarangModel $barang)
    {
        // Load the category relationship
        return $barang->load('kategori');
    }

    // Update a product
    public function update(Request $request, BarangModel $barang)
    {
        // Validate incoming data
        $validator = Validator::make($request->all(), [
            'barang_kode' => 'required|unique:m_barang,barang_kode,' . $barang->barang_id, // Unique except current
            'barang_nama' => 'required',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'kategori_id' => 'required|exists:m_kategori,kategori_id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Optional image
        ]);

        // If validation fails, return error
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // If there's an image, handle the upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public'); // Save new image
            $request->merge(['image' => $imagePath]); // Add image path to request data
        }

        // Update the product
        $barang->update($request->all());

        // Return the updated product data, including category
        return $barang->load('kategori');
    }

    // Delete a product
    public function destroy(BarangModel $barang)
    {
        // Delete the product
        $barang->delete();

        // Return success message
        return response()->json([
            'success' => true,
            'message' => 'Data barang berhasil dihapus'
        ]);
    }
}
