<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Forum;

class ForumController extends Controller {

    public function index() {
        $forums = Forum::all()->toArray();
        return view('forum.index', compact('forums'));
    }

    public function create() {
        return view('forum.create');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required',
            'desc' => 'required',
            'url' => 'required|alpha_num'
        ]);

        Forum::create($request->all());

        return redirect('/')->with('success', '討論區整好咗啦!');
    }
}