<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(){
        $data = Subscribe::orderBy('id','asc')->paginate(20);
        return view ('superadmin.subscriptions.list',compact('data'));
    }
    public function store(Request $request){
        Subscribe::create([
            'email'=>$request->post('email')
        ]);
        echo "<br> Thanks! Your subscription has been received";
    }
}
