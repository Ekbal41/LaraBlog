<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Navbar;
use App\Models\Footer;
use App\Models\About;
//import Storage
use Illuminate\Support\Facades\Storage;
//import File
use Illuminate\Support\Facades\File;


class SettingController extends Controller
{
    public function navbar()
    {
        $title = Navbar::all()->first();
        if ($title) {
            return view('admin.settings.navbar', compact('title'));
        } else {
            $title = new Navbar();
            $title->site_name = 'site name';
            return view('admin.settings.navbar');
        }

    }
    public function nnavbar(Request $request)
    {
        //dele all previous data
        Navbar::truncate();
        //insert new data
        $title = new Navbar();
        $title->site_name = $request->title;
        $title->save();
       
        return redirect()->route('admin.home');
    }
    //--------------------------------------------------------------------------------
    public function footer()
    {
        $data = Footer::all()->first();
        if ($data) {
            return view('admin.settings.footer', compact('data'));
        } else {
            $data = new Footer();
            $data->copy_right = 'copy right';
            $data->facebook = 'facebook';
            $data->twitter = 'twitter';
            $data->instagram = 'instagram';
            $data->youtube = 'youtube';
            return view('admin.settings.footer', compact('data'));
        }
        
    }
    public function nfooter(Request $request)
    {
        //delete all previous data
        Footer::truncate();
        //insert new data
        $data = new Footer();
        $data->copy_right = $request->copy;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->instagram = $request->instagram;
        $data->youtube = $request->youtube;
        $data->save();
        return redirect()->route('admin.home');
    }
    //--------------------------------------------------------------------------------
    public function about()
    {
        $about = About::all()->first();
        if ($about) {
            return view('admin.settings.about', compact('about'));
        } else {
            $about = new About();
            $about->yname = 'your name';
            $about->about = 'about';
            $about->about_image = 'image.jpeg';
            $about->location = 'location';
            $about->email = 'email';
            $about->phone = 'phone';
            return view('admin.settings.about', compact('about'));
        }
       
    }
    public function nabout(Request $request)
    {
        $about = About::all()->first();
        
        if ($request->hasFile('image')) {

            $imageName = time() . '.' . $request->image->extension();
            Storage::disk('public')->put($imageName, File::get($request->image));
        }else{
            $imageName = $about->image;
        }
        //delete all previous data
        About::truncate();
        //insert new data
        $about = new About();
        $about->yname = $request->yname;
        $about->about = $request->about;
        $about->about_image = $imageName;
        $about->location = $request->location;
        $about->email = $request->email;
        $about->phone = $request->phone;
        $about->save();

        return redirect()->route('admin.home');
    }
}
