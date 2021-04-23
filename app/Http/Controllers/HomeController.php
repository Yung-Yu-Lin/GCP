<?php

namespace App\Http\Controllers;

// models
use App\Event;
use App\Banner;
use App\Member;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $event_list_sidebar = Event::whereRaw("type = 1")
                                   ->latest()->take(10)->get();
        // carousel page images
        $event_list_carousel = Event::whereRaw("iscarousel = 1")
                                    ->latest()->get();

        $right_banner_data = Banner::where('banner_type', 0)->latest()->take(1)->get();
        $member_list = Member::get();
        return view('home', [
            'event_list_sidebar' => $event_list_sidebar,
            'event_list_carousel' => $event_list_carousel,
            'right_banner_data' => $right_banner_data[0]
        ])->withHeaders('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0, max-age=0');
    }
}
