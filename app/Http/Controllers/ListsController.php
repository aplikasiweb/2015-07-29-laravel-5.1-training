<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Todolist;

class ListsController extends Controller
{
    public function index() {

        $lists = Todolist::all();

        return view('lists.index')
            ->with('lists', $lists);
    }

    public function create() {
        return view('lists.create');
    }

    public function store(Request $request) {

        $list = new Todolist;
        $list->name = $request->get('name');
        $list->description = $request->get('description');
        $list->save();

        return redirect(route('lists.index'))
                ->with('flash_success', 'List created successfully.');;
    }

    public function show($id) {

        $list = Todolist::findOrFail($id);

        return view('lists.show')
            ->with('list', $list);
    }

    public function edit() {
        return view('lists.show');
    }

    public function update() {
        return view('lists.show');
    }

    public function delete() {
        return view('lists.show');
    }    
}
