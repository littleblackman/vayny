<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class WelcomeController extends Controller
{
    /**
     * Show the welcome page.
     *
     * @return View
     */
    public function index(): View
    {
        return view('welcome/index');
    }
}
