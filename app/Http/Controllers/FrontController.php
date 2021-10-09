<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('front.index');
    }
    public function about(){
        $data = [
            'title'=> 'Haqqımızda'
        ];
        return view('front.about' , $data,  compact('data'));
    }

    public function service(){
        $data = [
            'title'=> 'Xidmətlər'
        ];
        return view('front.services' ,  $data, compact('data'));
    }
    public function projects(){
        $data = [
            'title'=> 'Layihələr'
        ];
        return view('front.projects' ,$data, compact('data'));
    }
    public function betonZavod(){
        $data = [
            'title'=> 'Beton Zavod'
        ];
        return  view('front.betonZavod' ,$data, compact('data'));
    }
    public function contact(){
        $data = [
            'title'=> 'Əlaqə'
        ];
        return view('front.contact', $data, compact('data'));
    }
    public function ekinSaheleri(){
        $data = [
            'title'=> 'Əkin Sahələri'
        ];
        return view('front.sahe', $data, compact('data'));
    }
    public function agro(){
        $data = [
            'title'=> 'Agro Servis'
        ];
        return view('front.agroServis', $data, compact('data'));
    }
}
