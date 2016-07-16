<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use Twig_Loader_Array;
use Twig_Loader_Filesystem;
use Twig_Environment;

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
        /*$c = Course::create([
                'name' => 'Laravel',
                'code' => 'LRVL',
                'description' => 'Curso de Laravel para OTIN'
            ]);*/

        // Twig Templating System
        //$this->loader = new Twig_Loader_Filesystem($this->view_path);
        $this->options = [];
        $this->loader = new Twig_Loader_Array([
            'index' => 'Hello {{ name |upper }} with some {% {{ foo }} sdsd'
        ]);
        $this->twig   = new Twig_Environment($this->loader, $this->options);

        echo $this->twig->render('index', ['name'=>'Nick B. Palomino']);
    }
}
