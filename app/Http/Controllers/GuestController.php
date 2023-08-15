<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\News;

class GuestController extends Controller
{
    public function index()
    {
        // $aspirations = Aspiration::latest('created_at')->limit(5)->get();
        // $suggestions = Suggestion::latest('created_at')->where('status', 1)->limit(5)->get();
        // $news = News::Random();
        // news random
        $news = News::inRandomOrder()->limit(3)->get();
        $news1 = News::inRandomOrder()->limit(3)->get();
        $news2 = News::inRandomOrder()->limit(3)->get();
        $slides = Slide::inRandomOrder()->limit(3)->get();
        return view('guest.home.index', compact('news', 'slides', 'news1', 'news2'));
    }
}