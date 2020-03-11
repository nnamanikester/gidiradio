<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;
use App\Programme;
use App\Episode;
use App\Asitdrop;
use App\Oap;
use App\HeaderImage;
use App\Advert;
use App\SiteSetting;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $header_images = HeaderImage::where('active', 1)->orderBy('updated_at', 'DESC')->limit(10)->get();
      $programmes = Programme::orderBy('updated_at', 'DESC')->limit(20)->get();
      $episodes = Episode::orderBy('updated_at', 'DESC')->limit(20)->get();
      $asitdrops = Asitdrop::orderBy('created_at', 'DESC')->limit(20)->get();
      $blogs = Blog::orderBy('updated_at', 'DESC')->limit(20)->get();
      $oaps = Oap::limit(20)->get();
      $ads = Advert::where('active', 1)->limit(2)->get();
      $settings = SiteSetting::find(1);

      return view('welcome', compact('header_images', 'ads', 'oaps', 'programmes', 'settings', 'episodes', 'asitdrops', 'blogs'));
    }
    // public function login()
    // {
    //     return view('auth.login');
    // }
    // public function register()
    // {
    //     return view('auth.register');
    // }
}
