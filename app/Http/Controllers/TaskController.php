<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\RequestStack;

class TaskController extends Controller
{
    public function index()
    {

        $tasks = DB::table('tasks')->orderBy('name')->get();
        return view('tasks', compact('tasks'));
    }

    public function store(Request $reguest)
    {

        DB::table('tasks')->insert([
            'name' => $reguest->name,
        ]);
        return redirect()->to('/tasks');
    }

    public function destroy(Request $request)
    {
        DB::table('tasks')->where('id', $request->id)->delete();
        return redirect()->to('/tasks');
    }

    public function updatedata(Request $request)
    {
        $task = DB::table('tasks')->find($request->id);
        return view('updatedata', compact('task'));
    }

    public function update(Request $request)
    {
        DB::table('tasks')->where('id', $request->id)
            ->update(['name' => $request->name]);

        return redirect()->to('/tasks');
    }
}
