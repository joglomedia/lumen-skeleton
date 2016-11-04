<?php

namespace App\Http\Controllers;

use App\Item;
use App\Balance;
use App\Group;
use App\User;

class ItemController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        // GET -> /item
        return ['view'=>'index'];
    }

    public function create()
    {
        // GET -> /item/create
        return ['view'=>'create'];
    }

    public function store()
    {
        // POST -> /item
    }

    public function show()
    {
        // GET -> /item/{id}
    }

    public function edit($id)
    {
        // GET -> /item/{id}/edit
        return ['view'=>'edit','value'=>$id];
    }

    public function update()
    {
        // PUT -> /item/{id}
    }

    public function delete()
    {
        // DELETE -> /item/{id}
    }
}
