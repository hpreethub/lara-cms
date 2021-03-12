<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Page::paginate(10);
        return view ('superadmin.pages.list',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required',
        ]);

        $content=$request->input('content');
        $dom = new \DomDocument();
        $dom->encoding = 'utf-8';
        $content = mb_convert_encoding($content,'HTML-ENTITIES','utf-8');
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
// if the img source is 'data-url'
            if(preg_match('/data:image/', $src)) {
                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
                $data = base64_decode($data);

                $image_name = "/upload/" . time() . $k . '.png';
                $path = public_path() . $image_name;

                file_put_contents($path, $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            } //end if
        } // end foreach

        $content = $dom->saveHTML();
        Page::create([
                'name'=>$request->post('name'),
                'url'=>$request->post('name'),
                'content'=>$content,
                'keywords'=>$request->post('keywords'),
                'meta_description'=>$request->post('meta_description'),
                'is_active'=>1,

        ]);
        return redirect()->route('superadmin.page.index');
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
        $data = Page::where('id',$id)->first();
        return view('superadmin.pages.edit',compact('data'));
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
        $this->validate($request, [
            'content' => 'required',
        ]);

        $content=$request->input('content');
        $dom = new \DomDocument();
        $dom->encoding = 'utf-8';
        $content = mb_convert_encoding($content,'HTML-ENTITIES','utf-8');
        libxml_use_internal_errors(true);
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD );
        $images = $dom->getElementsByTagName('img');

        // foreach <img> in the submited message
        foreach($images as $k => $img){
            $src = $img->getAttribute('src');

            // if the img source is 'data-url'
            if(preg_match('/data:image/', $src)){
                $data = $src;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);

                $image_name= "/upload/" . time().$k.'.png';
                $path = public_path() . $image_name;

                file_put_contents($path, $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);

            } // <!--endif
        } // <!--endforeach

        $content = $dom->saveHTML();
        Page::where('id',$id)->update([
            'name'=>$request->post('name'),
            'url'=>$request->post('url'),
            'content'=>$content,
            'keywords'=>$request->post('keywords'),
            'meta_description'=>$request->post('meta_description'),
            'is_active'=>$request->post('is_active'),

        ]);
        return redirect()->route('superadmin.page.index');
    }

    public function page($page){
       $data = Page::where('url',$page)->first();
       if($data){
           return view('page',compact('data'));
       }
       else{
           return abort(404);
       }
    }

}
