<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::with('user')->orderBy('id','desc')->paginate(10);
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog=new Blog();
        return view('admin.blog.create-edit',compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $validateData=(object) $request->all();

        //upload image
        $img=$request->file('img');
        if(is_null($img)) {
            unset($validateData->img);
        } else {
            $name = 'blog/' . time() . Str::random(5) . '.' . $img->getClientOriginalExtension();
            Storage::disk("upload")->put($name,file_get_contents($img));
            $validateData->img=Storage::disk('upload')->url($name);
        }
        //end upload image

        auth()->user()->blogs()->create((array) $validateData);
        return redirect(route('admin.blog.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.create-edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        $validateData=(object) $request->all();

        //upload image
        $img=$request->file('img');
        if(is_null($img)) {
            unset($validateData->img);
        } else {
            $name = '/blog/' . time() . Str::random(5) . '.' . $img->getClientOriginalExtension();
            Storage::disk("upload")->put($name,file_get_contents($img));
            $validateData->img=Storage::disk('upload')->url($name);
        }
        //end upload image

        $blog->update((array) $validateData);
        return redirect(route('admin.blog.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back();
    }

    public function deleteImg(Blog $blog){
        $blog->update([
            'img'=>null
        ]);
        return back();
    }
}
