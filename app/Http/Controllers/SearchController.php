<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Page;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $query=$request->get('search');

        if($query != ''){
            // first check if page exist
            $data['page']= Page::where('content', 'like','%'.$query.'%')
                                    ->paginate(10);
            $data['news']=blog::where('content', 'like','%'.$query.'%')
                ->paginate(10);
        }

       return view('search',compact('data'));
    }
}
