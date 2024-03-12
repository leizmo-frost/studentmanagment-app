<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Dashboard;
class DashboardController extends Controller
{
    public function index() : View
    {
        return view('dashboards.index');
    }
}
