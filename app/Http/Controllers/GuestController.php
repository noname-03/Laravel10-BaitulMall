<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\News;

class GuestController extends Controller
{
    public function index()
    {
        $news = News::inRandomOrder()->limit(3)->get();
        $news1 = News::inRandomOrder()->limit(3)->get();
        $news2 = News::inRandomOrder()->limit(3)->get();
        // get slide random where is_active = true
        $slides = Slide::where('is_active', true)->inRandomOrder()->limit(3)->get();
        return view('guest.home.index', compact('news', 'slides', 'news1', 'news2'));
    }

    public function about()
    {
        $about = About::first();
        return view('guest.home.about', compact('about'));
    }
}