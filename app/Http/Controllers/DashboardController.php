<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard.index');
    }

    public function boarders(): View
    {
        return view('dashboard.pensionnaires');
    }

    public function listBoarders(): View
    {
        return view('dashboard.listPensionnaires');
    }

    public function showBoarders(): View
    {
        return view('dashboard.showPensionnaires');
    }

}
