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
    }

    public function create()
    {
        // GET -> /item/create
    }

    public function store()
    {
        // POST -> /item
    }

    public function show()
    {
        // GET -> /item/{id}
    }

    public function edit()
    {
        // GET -> /item/{id}/edit
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
