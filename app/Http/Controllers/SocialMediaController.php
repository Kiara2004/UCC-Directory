<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class SocialMediaController extends Controller
{
    public function index(): View
    {
        return view('social-media');
    }
}
