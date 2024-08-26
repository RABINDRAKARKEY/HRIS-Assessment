<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        // return view('home');

        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            // this let user login to user page
            if ($usertype == 'user') {
                return view('home.homepage');
            }

            // this let admin (i.e. HR) login to Admin/HR page

            elseif ($usertype == 'admin') {
                return view('admin.adminhome');
            } else {
                redirect()->back();
            }
        }
    }
    public function homepage()
    {
        $post = Post::all();
        return view('home.homepage', compact('post'));
    }
    // public function post(){
    //     return view("post");
    // }
}
