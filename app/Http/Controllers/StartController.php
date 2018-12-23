<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $url_data = [
            [
                'title' => 'climax',
                'url' => 'http://climax.uz'
            ],
            [
                'title' => 'medsport',
                'url' => 'http://medsport.uz'
            ]
        ];

        return view('start', [
            'url_data' => json_encode($url_data)
        ]);
    }

    public function getJson()
    {
        $url_data = [
            [
                'title' => 'climax',
                'url' => 'http://climax.uz'
            ],
            [
                'title' => 'medsport',
                'url' => 'http://medsport.uz'
            ]
        ];

        return $url_data;
    }
}
