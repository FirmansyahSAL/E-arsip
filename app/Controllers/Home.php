<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data=array(
            'title' =>'home',
            'isi' =>'vhome'
        );
        return view('front/wrapper',$data);
    }
}

