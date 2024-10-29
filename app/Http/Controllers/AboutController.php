<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $team = [
            [
                "id"=> "mem1",
                "name"=> "John Carter",
                "job"=> "Founder & CEO",
                "img"=> asset('images/about/member1.jpg')
            ],
            [
                "id"=> "mem2",
                "name"=> "Emily Wiliams",
                "job"=> "Chief Marketing Officer",
                "img"=> asset('images/about/member2.jpg')
            ],
            [
                "id"=> "mem3",
                "name"=> "James Anderson",
                "job"=> "Chief Operating Officer",
                "img"=> asset('images/about/member3.jpg')
            ]
            ];

            return view('about',compact("team"));
    }

}
