<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['galleries']=Gallery::paginate(15);

        return view('gallery.index', $data, compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields=[
            'Image'=>'required',
            'Title'=>'required',
        ];

        $message=[
            'Image.required'=>'The required image',    
            'required'=>'The :attribute is required',
        ];

        $this->validate($request, $fields, $message);

        $datasGallery = request()->except('_token');

        if($request->hasFile('Image')){
            $datasGallery['Image']=$request->file('Image')->store('uploads', 'public');
        }
        
        Gallery::insert($datasGallery);

       /*  return response()->json($datasGallery); */
        return redirect('gallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery=Gallery::findOrFail($id);

        return view('gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fields=[
            'Title'=>'required',
        ];

        $message=[   
            'required'=>'The :attribute is required',
        ];

        if($request->hasFile('Image')){
            $fields=['Image'=>'required'];
            $message=['Image.required'=>'The required image'];        
        }

        $this->validate($request, $fields, $message);

        $datasGallery = request()->except('_token','_method');

        if($request->hasFile('Image')){
            $gallery=Gallery::findOrFail($id);
            Storage::delete('public/'.$gallery->image);
            $datasGallery['Image']=$request->file('Image')->store('uploads', 'public');
        }

        Gallery::where('id','=',$id)->update($datasGallery);
        $gallery=Gallery::findOrFail($id);

        return redirect('gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery=Gallery::findOrFail($id);

        if(Storage::delete('public/'.$gallery->image)){
            Gallery::destroy($id);
        }

        return redirect('gallery');
    }
}
