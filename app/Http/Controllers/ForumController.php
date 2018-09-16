<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller {

    public function index() {
        $forums = Forum::all();
        return view('forum.index', ['forums' => $forums]);
    }

    public function create() {
        return view('forum.create');
    }

    public function store() {
        var_dump(request('name'));
        var_dump(request('desc'));
        var_dump(request('url'));
    }
}