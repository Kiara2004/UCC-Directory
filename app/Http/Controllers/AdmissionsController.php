<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AdmissionsController extends Controller
{
    public function index(): View
    {
        return view('admissions');
    }
}
