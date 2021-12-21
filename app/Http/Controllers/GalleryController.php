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
        $data['galleries']=Gallery::paginate(5);

        return view('gallery.index', $data);
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
        $datasGallery = request()->except('_token');

        if($request->hasFile('Image')){
            $datasGallery['Image']=$request->file('Image')->store('uploads', 'public');
        }
        
        Gallery::insert($datasGallery);

       /*  return response()->json($datasGallery); */
        return redirect('gallery')->with('message','Added image');
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
        $datasGallery = request()->except('_token','_method');

        if($request->hasFile('Image')){
            $gallery=Gallery::findOrFail($id);
            Storage::delete('public/'.$gallery->image);
            $datasGallery['Image']=$request->file('Image')->store('uploads', 'public');
        }

        Gallery::where('id','=',$id)->update($datasGallery);
        $gallery=Gallery::findOrFail($id);

        return view('gallery.edit', compact('gallery'));
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

        return redirect('gallery')->with('message','Deleted image');
    }
}
