<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontEndController extends Controller
{
    /** Welcome View */
    public function welcome()
    {
        return view('welcome');
    }

    /** Welcome View */
    public function services()
    {
        return view('services');
    }

    /** Portfolio View */
    public function portfolio()
    {
        return view('portfolio');
    }

    /** Portfolio View */
    public function about()
    {
        return view('about');
    }

        /** Portfolio View */
    public function contact()
    {
        return view('contact');
    }

    /** Show the services
     * @param string $service
    */
    public function showServices($service) {
        
        if(!View::exists("services.$service")) {
            return view('404');
        }

        return view("services.$service");
    }



}
