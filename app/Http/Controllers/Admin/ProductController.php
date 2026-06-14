<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Order; 

class ProductController extends Controller
{
 public function index()
{
    $products = Product::with('images')->latest()->get();

    return view('admin.products.index', compact('products'));
}

    public function create()
    {
        $categories = [
            'Glueless Wigs',
            'Bob Wigs',
            'Bone Straight Wigs',
            'Raw Wavy Wig',
            'Original Curly Wig',
            'Fringe Wig',
            'Short Cut Wig',
            'Headband Wig',
            'Hair Bundles',
            'Wig Combo',
            'New Arrivals',
            'Hair Tools'
        ];

        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
                $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'old_price' => $request->old_price,
            'description' => $request->description,
            'category' => $request->category,
        ]);

        // multiple images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $name = time().rand(1,100).'.'.$image->extension();
                $image->move(public_path('img'), $name);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => 'img/'.$name
                ]);
            }
        }

        return redirect('/admin/products');
    }

    // SHOW EDIT PAGE
public function edit($id)
{
    $product = Product::findOrFail($id);

    $categories = [
        'Glueless Wigs','Bob Wigs','Bone Straight Wigs','Raw Wavy Wig',
        'Original Curly Wig','Fringe Wig','Short Cut Wig','Headband Wig',
        'Hair Bundles','Wig Combo','New Arrivals','Hair Tools'
    ];

    return view('admin.products.edit', compact('product', 'categories'));
}

// UPDATE PRODUCT
public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $product->update([
        'name' => $request->name,
        'price' => $request->price,
        'old_price' => $request->old_price,
        'description' => $request->description,
        'category' => $request->category,
    ]);

    return redirect('/admin/products');
}

// DELETE PRODUCT
public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect('/admin/products');
}



}
