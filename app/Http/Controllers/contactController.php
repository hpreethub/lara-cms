<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactus;
class contactController extends Controller
{
    // send post data // only allowed from website
    public function send_mail(Request $request){
        $data = $request->except('_token');
        $email = Mail::to('info@Craftpitchbuildingproducts.com')->send(new contactus($data));

        if (Mail::failures()) {
            echo "An error has been Occured. Please try again.";}
            else{
                echo "Thanks for your enquiry. We will get back to you at our earliest";
            }
    }

   
}
