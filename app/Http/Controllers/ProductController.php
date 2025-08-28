<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(10);
        return view('admin.products.index',compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);
    }

    public function update()
    {
        return view('admin.products.update');
    }

    public function destroy()
    {
        return redirect()->back();
    }
}
