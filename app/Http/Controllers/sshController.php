<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Task;

class sshController extends Controller
{
    public function index(Request $request) {
        $query =  Task::query();

        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->has('price')) {
            $query->where('price', 'like', '%' . $request->input('price') . '%');
        }

        $tasks = $query->get();
        return view('index', compact('tasks'));
    }
}
