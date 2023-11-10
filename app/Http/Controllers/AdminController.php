<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function view_category()
    {

        $data = category::all();

        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data = new category;

        $data->category_name = $request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    public function delete_category($id)
    {
        $data = category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }

    public function view_product()
    {
        $category = category::all();

        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request)
    {
        $product = new Product();

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->quantity = $request->quantity;
        $product->category = $request->category;

        $image = $request->file('image'); // Sử dụng file() thay vì image
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move('product', $imagename);

        $product->image = $imagename; // Đảm bảo tên cột trong cơ sở dữ liệu là "image"


        $product->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function show_product()
    {
        $product = Product::all();
        return view('admin.show_product',compact('product'));
    }
}