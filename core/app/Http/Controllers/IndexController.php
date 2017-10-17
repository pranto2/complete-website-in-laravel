<?php

namespace App\Http\Controllers;

use App\About;
use App\General;
use App\Post;
use App\Seo;
use App\Service;
use App\Social;
use App\Statistics;
use App\Testimonial;
use App\Tservice;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $seo = Seo::find(1);
        $general = General::find(1);
        $blog = Post::all();
        $sta = Statistics::all();
        $testi = Testimonial::all();
        $about = About::find(1);
        $social = Social::all();
        $service = Service::find(1);
        $tserv = Tservice::all();
        return view('index',compact('about','social','service' , 'tserv', 'testi','sta', 'blog','general','seo'));
    }
}
