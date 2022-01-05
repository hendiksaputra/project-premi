<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceCategoryController extends Controller
{
    public function index()
    {
        $attendanceCategories = DB::table('attendance_categories')->get();
        return view('attCat.index', compact('attendanceCategories'));
    }

    public function add()
    {
        return view('attCat.add');
    }

    public function addProcess(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:attendance_categories,code',
            'remarks' => 'required',
        ]);
        DB::table('attendance_categories')->insert([
            'code' => $request->code,
            'remarks' => $request->remarks
        ]);
        return redirect('att_categories')->with('status', 'Category added successfully');
    }

    public function edit($id)
    {
        $attendanceCategories = DB::table('attendance_categories')->where('id', $id)->first();
        return view('attCat/edit', compact('attendanceCategories'));
    }

    public function editProcess(Request $request, $id)
    {
        $request->validate([
            'code' => 'required',
            'remarks' => 'required',
        ]);
        DB::table('attendance_categories')->where('id', $id)
        ->update([
            'code' => $request->code,
            'remarks' => $request->remarks
        ]);
        return redirect('att_categories')->with('status', 'Category updated successfully');
    }

    public function delete($id)
    {
        DB::table('attendance_categories')->where('id', $id)->delete();
        return redirect('att_categories')->with('status', 'Category deleted successfully');
    }
}
