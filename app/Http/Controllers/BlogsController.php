<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $blog;
    public function __construct(Blogs $blog)
    {
        $this->blog = $blog;
    }
    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $blog = Blogs::search($keyword)->paginate(5);

        return view('blogs.listblog', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.addblog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = new Blogs();
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->content = $request->content;
        if ($request->file('file_upload')->isValid()) {
            $uploadedFile = $request->file('file_upload');
            $extension = $uploadedFile->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            
            $destinationPath = public_path('images');
        
            $uploadedFile->move($destinationPath, $filename);
           
            $blog->image = $filename;
        }
        $blog->save();
        return redirect()->route('blogs.index')->with('success', 'Thêm bài viết thành công!');
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
        $edit_blog = Blogs::find($id);
        if ($edit_blog == null) {
            return view('404');
        };
        return view('blogs.editblog', compact('edit_blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $upblog = Blogs::find($id);
        $upblog->title = $request->title;
        $upblog->slug = $request->slug;
        $upblog->content = $request->content;
        if ($request->hasFile('file_upload') && $request->file('file_upload')->isValid()) {
            $uploadedFile = $request->file('file_upload');
            $extension = $uploadedFile->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
    
            $destinationPath = public_path('images');
            $uploadedFile->move($destinationPath, $filename);
    
            $upblog->image = $filename;
        }
    
        $upblog->save();
        return redirect()->route('blogs.index')->with('success', 'Thêm bài viết thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $desblog = Blogs::find($id);
        $desblog->delete();
        return redirect()->route('blogs.index')->with('success', 'Xóa bài viết thành công!');
    }
}
