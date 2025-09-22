<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function AboutUs(){
        // $asset = Asset::latest()->get();
        // return view('admin.assets.all_asset',compact('asset'));
        return view('home.homelayout.about_us');
    }


}
