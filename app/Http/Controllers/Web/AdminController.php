<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['changeLanguage', 'index', 'aboutUs', 'termsOfUse', 'privacyPolicy', 'services', 'serviceDatas', 'products', 'productDatas', 'events', 'eventDatas', 'careers', 'careerDatas']);
    }

    // ==================================== HTTP GET METHODS ====================================
    /**
     * GET: About the company page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }
}
