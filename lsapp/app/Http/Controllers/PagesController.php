<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    

    public function index() {
        $title = "Welcome to Laravel!";
        return view("pages.index")->with("title",$title);
    }

    public function about() {
        $title = "About page";
        return view("pages.about")->with("title",$title);
    }

    public function services() {
       
        $data = [
            "title"=>"Service Page",
            "detail"=>"This is the service page and created only for learning",
            "services"=>["Web Development","PHP","Laravel"]

        ];
        return view("pages.services")->with($data);
    }
}
