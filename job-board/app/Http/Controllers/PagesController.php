<?php

namespace App\Http\Controllers;
use App\User;

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

    public function companies() {
        return view('pages.browse-companies');
    }
    public function myJobs() {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('pages.my-jobs')->with('jobs', $user->jobs);
    }
}
