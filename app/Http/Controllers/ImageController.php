<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Image;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = Image::where('cat_id',$id)->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = category::all();

        return view('superadmin.gallery.create_cat',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img=$request->file('image');
        if($img){
            $imgname=time().'.'.$img->getClientOriginalExtension();
            $destinationPath=public_path('/gallery/');
            $img->move($destinationPath, $imgname);}
        else{
            $imgname="";
        }


        $data['name'] = $request->post('name');
        $data['image']=$imgname;


        $cat=category::create($data);

        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = category::where('id',$id)->first();
        return view('superadmin.gallery.edit_cat',compact('data'));
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
        $img=$request->file('image');

        if($img){
            $imgname=time().'.'.$img->getClientOriginalExtension();
            $destinationPath=public_path('/gallery/');
            $img->move($destinationPath, $imgname);
            $data['image']=$imgname;
        }



        $data['name'] = $request->post('name');
        category::where('id',$id)->update($data);
        return redirect()->route('cat.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img = category::where('id',$id)->first()->image;
        // delete img
        $image_path = public_path('/gallery/'.$img);

        if(File::exists($image_path)) {

            File::delete($image_path);
        }

        category::where('id',$id)->delete();

        return back();
    }
    public function create_image($id){
        $data['data'] = Image::where('cat_id',$id)->get();
        $data['cat_id']=$id;
        $data['cat_name']=category::find($id)->name;
        return view('superadmin.gallery.create_image',compact('data'));
    }
    public function store_image(Request $request)
    {
        $img=$request->file('image');
        if($img){
            $imgname=time().'.'.$img->getClientOriginalExtension();
            $destinationPath=public_path('/gallery/');
            $img->move($destinationPath, $imgname);}
        else{
            $imgname="";
        }



        $data['image']=$imgname;
$data['cat_id']=$request->post('cat_id');

        $cat=Image::create($data);

        return back();

    }
    public function destroy_image($id){
        $img = Image::where('id',$id)->first()->image;
        // delete img
        $image_path = public_path('/gallery/'.$img);

        if(File::exists($image_path)) {

            File::delete($image_path);
        }

        Image::where('id',$id)->delete();

        return back();
    }
}
