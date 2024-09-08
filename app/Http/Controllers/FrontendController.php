<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Profil;
use App\Models\Hero;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $profil = Profil::all();
        $hero = Hero::all();
        $gallery = Gallery::all();
        $portofolio = Portofolio::all();
        $blog = Blog::all();
        return view('welcome', [
            'profil' => $profil,
            'hero' => $hero,
            'gallery' => $gallery,
            'portofolio' => $portofolio,
            'blog' => $blog,
        ]);
    }

    public function blogDetails() {
        $blog = Blog::all();
        $blog->get('slug');
        ddd($blog);
        return view('blog-details', [
            'blog' => $blog
        ]);
    }
    public function about()
    {
        return view('aboutus');
    }
    public function battery()
    {
        return view('battery');
    }
    public function batteryDetail()
    {
        return view('battery-detail');
    }
    public function detailCustom()
    {
        return view('detail');
    }


    public function batteryDetail128100()
    {
        return view('battery-detail128100');
    }
    public function solar()
    {
        return view('solar');
    }

public function gallery()
    {
        $gallery = Gallery::all();
        return view('gallery', [
            
           
            'gallery' => $gallery,

        ]);
    }
}
