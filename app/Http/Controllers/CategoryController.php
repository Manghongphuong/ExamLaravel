<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $category;
    public function __construct(Categories $cate)
    {
        $this->category = $cate;
    }
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $cate = Categories::search($keyword)->paginate(5);

        return view('categories.listcate', compact('cate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.addcate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cate = new Categories();
        $cate->name = $request->namecate;
        $cate->slug = $request->slugcate;
        $cate->save();
        return redirect()->route('categories.index');
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
        $editcate = Categories::find($id);
        if($editcate == null){
            return redirect()->route('categories.index');
        }
        return view('categories.editcate', compact('editcate'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $upcate = Categories::find($id);
        $upcate->name = $request->namecate;
        $upcate->slug = $request->slugcate;
        if($upcate == null){
            return redirect('/thông báo');
        };
        $upcate->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cate = Categories::find($id);
        $cate->delete();
        return redirect()->route('categories.index')->with('success', 'Danh mục đã được xóa!');
    }
}
