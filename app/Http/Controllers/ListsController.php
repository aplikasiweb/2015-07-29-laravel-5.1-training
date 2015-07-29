<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListsController extends Controller
{
    public function getIndex() {

        $lists = [
            'Vacation Planning',
            'Grocery Shopping',
            'Camping Trip'
        ];

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
