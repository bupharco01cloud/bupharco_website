<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function ContactUs(){
        // $asset = Asset::latest()->get();
        // return view('admin.assets.all_asset',compact('asset'));
        return view('home.homelayout.contact_us');
    }
}
