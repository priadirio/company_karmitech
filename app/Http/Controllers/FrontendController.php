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

    public function battery48()
    {
        return view('battery48');
    }

    public function battery512()
    {
        return view('battery512');
    }

    public function batteryess()
    {
        return view('batteryess');
    }
    public function batteryacc()
    {
        return view('batteryacc');
    }
    public function batterycustom()
    {
        return view('batterycustom');
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
    public function batteryDetail48LFP()
    {
        return view('battery-detail48LFP');
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

    public function batteryDetail409()
    {
        return view('battery-detail409');
    }
    public function batteryDetail768()
    {
        return view('battery-detail768');
    }

    public function batteryDetail896()
    {
        return view('battery-detail896');
    }

    public function batteryDetail1331()
    {
        return view('battery-detail1331');
    }

    public function batteryDetailacc1()
    {
        return view('battery-detailacc1');
    }
    public function batteryDetailacc2()
    {
        return view('battery-detailacc2');
    }

    public function batteryDetailcustom1()
    {
        return view('battery-detailcustom1');
    }

    public function batteryDetailcustom2()
    {
        return view('battery-detailcustom2');
    }

    public function batteryDetailcustom3()
    {
        return view('battery-detailcustom3');
    }

    public function batteryDetailcustom4()
    {
        return view('battery-detailcustom4');
    }

    public function batteryDetailcustom5()
    {
        return view('battery-detailcustom5');
    }

    public function batteryDetailcustom6()
    {
        return view('battery-detailcustom6');
    }

    public function solarDetail1()
    {
        return view('solar-detail1');
    }

    public function solarDetail2()
    {
        return view('solar-detail2');
    }

    public function solarDetail3()
    {
        return view('solar-detail3');
    }

    public function solarDetail4()
    {
        return view('solar-detail4');
    }

    public function solarDetail5()
    {
        return view('solar-detail5');
    }

    public function solarDetail6()
    {
        return view('solar-detail6');
    }

    
    public function panelDetail1()
    {
        return view('panel-detail1');
    }

    public function panelDetail2()
    {
        return view('panel-detail2');
    }

    public function panelDetail3()
    {
        return view('panel-detail3');
    }

    public function panelDetail4()
    {
        return view('panel-detail4');
    }

    public function panelDetail5()
    {
        return view('panel-detail5');
    }

    public function panelDetail6()
    {
        return view('panel-detail6');
    }
    public function panelDetail7()
    {
        return view('panel-detail7');
    }
    
    public function solar()
    {
        return view('solar');
    }
    public function contactUs()
    {
        return view('contact-us');
    }

public function gallery()
    {
        $gallery = Gallery::all();
        return view('gallery', [
            
           
            'gallery' => $gallery,

        ]);
    }
}
