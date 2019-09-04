<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function faq() {
        return view('pages.faq');
    }

    public function pricing(){
        return view('pages.pricing');
    }

    public function blog(){
        return view('pages.blog');
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Job Listings', 'Recruiting']
        );
        return view('pages.services')->with($data);
    }

    public function company() {
        return view('pages.company');
    }
}
