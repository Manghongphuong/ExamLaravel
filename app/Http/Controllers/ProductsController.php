<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $keyword = $request->input('keyword');

        $pro = Products::with('category')->search($keyword)->paginate(5);
       
        foreach ($pro as $product) {
            $product->category_name = $product->category ? $product->category->name : 'Chưa có danh mục';
        }
        
        return view('products.listpro', compact('pro'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cate_pro = Categories::all();
        return view('products.addpro', compact('cate_pro'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pro = new Products();
        $pro->category_id = $request->cate_pro;
        $pro->name = $request->title;
        $pro->slug = $request->infoproduct;
        $pro->price = $request->price;
        if ($request->file('file_upload')->isValid()) {
            $uploadedFile = $request->file('file_upload');
            $extension = $uploadedFile->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            
            $destinationPath = public_path('images');
        
            $uploadedFile->move($destinationPath, $filename);
            //{{ dd(asset('images/' . $products->image)) }} kiểm tra hiển thị đường dẫn url
            // $url = asset('images/' . $filename);// lưu cả url vào db
            $pro->image = $filename; // Chỉ lưu tên file trong database
        }
        $pro->description = $request->desproducts;
        $pro->save();
        return redirect()->route('products.index')->with('success', 'Thêm sản phẩm thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cate_pro = Categories::all();
        $editpro = Products::find($id);
        if ($editpro == null) {
            return view('404');
        };
        return view('products.editpro', compact('cate_pro', 'editpro'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $uppro = Products::find($id);
        if (!$uppro) {
            return redirect()->route('products.index')->with('error', 'Sản phẩm không tồn tại!');
        }
        
        $uppro->category_id = $request->cate_pro;
        $uppro->name = $request->title;
        $uppro->slug = $request->infoproduct;
        $uppro->price = $request->price;

        if ($request->file('file_upload')->isValid()) {
            $uploadedFile = $request->file('file_upload');
            $extension = $uploadedFile->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            
            $destinationPath = public_path('images');
        
            $uploadedFile->move($destinationPath, $filename);
            $uppro->image = $filename;
        }

        $uppro->description = $request->desproducts;
        $uppro->save();
        return redirect()->route('products.index')->with('success', 'Cập nhật sản phẩm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $despro = Products::find($id);
        $despro->delete();
        return redirect()->route('products.index')->with('success', 'Danh mục đã được xóa!');
    }
}
