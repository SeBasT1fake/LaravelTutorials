<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }
    public function about(): View
    {
        $viewData = [];
        $viewData ["title"]="About us - Online Store";
        $viewData ["subtitle"] = "About us";
        $viewData ["description"] = "this is an about page";
        $viewData ["author"] = "Developed by: Juan Sebastian Aguilar Carballo";
        return view('home.about')->with("viewData", $viewData);
    }
    public function contact(): View
    {
        $viewData = [];
        $viewData ["title"]="Contact us - Online Store";
        $viewData ["subtitle"] = "Contact us";
        $viewData ["email"] = "contact@example";
        $viewData ["phone"] = "(555) 555-5555";
        $viewData ["address"] = "123 Fake Street, Springfield, USA";
        return view('home.contact')->with("viewData", $viewData); 
    }
}
