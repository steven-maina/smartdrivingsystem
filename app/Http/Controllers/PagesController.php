<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return redirect('pages.index');
    }
    public function about(){
        return redirect('pages.about');
    }
    public function aboutteam(){
        return redirect('pages.about-team');
    }
    public function blog(){
        return redirect('pages.blog');
    }
    public function blogsingle(){
        return redirect('pages.blog-single');
    }
    public function contact(){
        return redirect('pages.contact');
    }
    public function coursedetail(){
        return redirect('pages.course-detail');
    }
    public function courselist(){
        return redirect('pages.course-list');
    }
    public function home02(){
        return redirect('pages.course-list');
    }
}
