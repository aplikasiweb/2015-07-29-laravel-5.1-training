<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Todolist;

class ListsController extends Controller
{
    public function getIndex() {

        $lists = Todolist::all();

        return view('lists.index')
            ->with('lists', $lists);
    }

    public function getCreate() {
        return view('lists.create');
    }

    public function postStore() {
        return view('lists.store');
    }
}
