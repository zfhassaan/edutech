<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Welcome Homepage
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index(){
        return view('front.index');
    }


    /**
     * About EduTech
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function about(){
    	return view('front.about');
    }

    /**
     * Events Page
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function events(){
    	return view('front.event');
    }

    /**
     * Upcoming Events
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function upcomingevents(){
    	return view('front.upcomingevents');
    }

    /**
     * Courses Offered
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function coursesoffered(){
    	return view('front.coursesoffered');
    }

    /**
     * Faculty members page
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function facultymembers(){
    	return view('front.facultymembers');
    }

    /**
     * Blog Page
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function blog(){
        return view('front.blog');
    }

    /**
     * Contacts Page
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function contact(){
        return view('front.contact');
    }


    // public function locale($locale){
    //     Session::put('locale',$locale);
    //     return redirect()->back();
    // }
}
