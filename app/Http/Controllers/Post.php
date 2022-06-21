<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    
        return view('admin.post.index',[
            'post'=>\App\Models\post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // dd('erger');
        return view('admin.post.createPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title'=>'required|String|min:5|max:255',
             'Content'=>'required|max:1000',
             'auther'=>'nullable|max:100',
             'image'=>'required|image'
         ]);

         if ($request->hasFile('image') && $request->file('image')->isValid()){//فحص هل هي صورة
             $file=$request->file('image');
             $fileNmae='post-image-'.date('d-m-y-h-i').'.'.$file->getClientOriginalExtension();//تحديد الية التسمية
             $image=$file->storeAs('images',$fileNmae,'public');
         }
         $data=array_merge($request->all(),[
             'image'=>$image
         ]);

        \App\Models\post::create($data);
       // dd($data);
        return redirect()->route('post.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=\App\Models\post::findOrFail($id);
        $product->delete();
        return redirect()->route('post.index');
    }
}
