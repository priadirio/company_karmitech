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
    public function battery256()
    {
        return view('battery256');
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
    public function batteryDetail128120()
    {
        return view('battery-detail128120');
    }

    public function batteryDetail128200()
    {
        return view('battery-detail128200');
    }

    public function batteryDetail25650()
    {
        return view('battery-detail25650');
    }

    public function batteryDetail256100()
    {
        return view('battery-detail256100');
    }

    public function batteryDetail256120()
    {
        return view('battery-detail256120');
    }

    public function batteryDetail256200()
    {
        return view('battery-detail256200');
    }

    public function batteryDetail4850()
    {
        return view('battery-detail4850');
    }
    public function batteryDetail48100()
    {
        return view('battery-detail48100');
    }

    public function batteryDetail48200()
    {
        return view('battery-detail48200');
    }

    public function batteryDetail512100()
    {
        return view('battery-detail512100');
    }

    public function batteryDetail512150()
    {
        return view('battery-detail512150');
    }

    public function batteryDetail512400()
    {
        return view('battery-detail512400');
    }

    public function batteryDetailLFP()
    {
        return view('battery-detailLFP');
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
