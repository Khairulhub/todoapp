<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;

use DB;

class TodoController extends Controller
{
    public function index()
    {
        $tasks = task::all();
        return view('index', compact('tasks'));
    }

    public function add()
    {

        return view('add_Page');
    }
    
    public function added(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|max:255',
        //     'email' => 'required|email|unique:tasks,email',
        // ]);
        
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;

        task::insert($data);


        return redirect()->route('index');
    }

    public function edit($id)
    {
        $tasks = task::findorfail($id);
        return view('edit', compact('tasks'));
    }
    public function edited(Request $request)
    {


        $id = $request->id;
        $task = task::findOrFail($id);
        $task->name = $request->name;
        $task->email = $request->email;

        $task->save();



        return redirect()->route('index');
    }



    public function delete($Id)
    {


        $test = task::destroy($Id);
        // echo $test;
        // exit;


        return redirect()->route('index');


        //

        // return redirect()->route('index');
    }
}