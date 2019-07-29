<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome To The Form App';
        return view('pages.index')->with('title', $title);
    }
    public function about() {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
    public function form() {
        $title = 'This is the Form Page';
        return view('pages.form')->with('title', $title);
    }
    public function customers() {
        $title = 'Customers';
        return view('pages.customers')->with('title', $title);
    }
    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming']
        );
        return view('pages.services')->with($data);
    }
}
