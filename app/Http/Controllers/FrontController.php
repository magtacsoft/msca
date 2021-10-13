<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Project;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        $data = Slider::all();
        $page = Page::find(9);
        return view('front.index' , ['data' => $data , 'page'=> $page]);
    }
    public function about(){
        $data = Page::find(9);

        $data = [
            'title'=> $data->title,
            'text'=>$data->text,
            'img'=> $data->img
        ];
        return view('front.about', ['data' => $data]);
    }

    public function service(){

      $data = Page::find(14);

        return view('front.services' ,  ['data' => $data]);
    }
    public function projects(){
       $data = Page::find('13');
        $project = Project::all();

        return view('front.projects' ,['data' => $data , 'project' => $project]);
    }
    public function betonZavod(){
        $data = Page::find(12);

        return  view('front.betonZavod' , ['data' => $data]);
    }
    public function contact(){
        $data = [
            'title'=> 'Əlaqə'
        ];
        return view('front.contact', ['data' => $data]);
    }
    public function ekinSaheleri(){
        $data = Page::find(10);



        return   view('front.sahe' , ['data' => $data]);

    }
    public function agro(){
        $data = Page::find(11);

        return view('front.agroServis',  ['data' => $data]);
    }
}
