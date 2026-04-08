<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\View\View;

class DirectoryController extends Controller
{
    public function index(): View
    {
        $staff = Staff::all();
        return view('directory', ['staff' => $staff]);
    }

    public function show(Staff $staff): View
    {
        return view('staff.detail', ['staff' => $staff]);
    }
}
