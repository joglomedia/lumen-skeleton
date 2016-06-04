<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $data = [
                'org' => 'OTIN',
                'app' => ''
            ];
        return view('home', $data);
    }

    public function course()
    {
        $c = Course::create([
                'name' => 'Laravel',
                'code' => 'LRVL',
                'description' => 'Curso de Laravel para OTIN'
            ]);

        return Course::all();
    }
}
