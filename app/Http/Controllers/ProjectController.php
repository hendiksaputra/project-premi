<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = DB::table('projects')->get();
        //return view('project.index', ['projects' => $projects]);
        return view('project.index', compact('projects'));
    }

    public function add()
    {
        return view('project.add');
    }

    public function addProcess(Request $request)
    {
        DB::table('projects')->insert([
            'code_project' => $request->code_project,
            'name_project' => $request->name_project
        ]);
        return redirect('projects')->with('status', 'Project added successfully');
    }

    public function edit($id)
    {
        $project = DB::table('projects')->where('id', $id)->first();
        return view('project/edit', compact('project'));
    }

    public function editProcess(Request $request, $id)
    {
        DB::table('projects')->where('id', $id)
        ->update([
            'code_project' => $request->code_project,
            'name_project' => $request->name_project
        ]);
        return redirect('projects')->with('status', 'Project updated successfully');
    }

    public function delete($id)
    {
        DB::table('projects')->where('id', $id)->delete();
        return redirect('projects')->with('status', 'Project deleted successfully');
    }
    
}
