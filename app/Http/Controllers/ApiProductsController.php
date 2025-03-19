<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Http\Resources\SanPham;


class ApiProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //method: get
        $products = Products::all();
        return SanPham::collection($products); //trả về collection định nghịa theo resource SanPham
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //method: post
        // nhận request từ phía client gửi (form or json body) được thực thi bởi method: post
        $product = Products::create($request->all());
        return new SanPham($product); // trả về instance của SanPham vừa tạo xong
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //method: get
        // findOrFail(): mém ngoại lệ không tìm thấy
        $product = Products::findOrFail($id);
        return new SanPham($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //method: put or patch
        // dd($request->all()); // In dữ liệu request và dừng chương trình
        $product = Products::findOrFail($id);
        $product->update($request->all());
        return response()->json([
            'message' => 'Cập nhật thành công',
            'data' => new SanPham($product)
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //method: delete
        //findOrFail($id) tìm một bản ghi trong bảng dựa trên giá trị $id được cung cấp.
        try {
            $product = Products::findOrFail($id);
            $product->delete();
            return response()->json([
                'message' => 'Xóa thành công',
                'data' => new SanPham($product)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Xóa thất bại: ' . $e->getMessage(),
            ], 500);
        }
    }
}
