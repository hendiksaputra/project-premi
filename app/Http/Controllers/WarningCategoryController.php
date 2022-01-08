<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WarningCategoryController extends Controller
{
    public function index()
    {
        $warningCategories = DB::table('warning_categories')->get();
        return view('warningCat.index', compact('warningCategories'));
    }

    public function add()
    {
        return view('warningCat.add');
    }

    public function addProcess(Request $request)
    {
        $request->validate([
            'sp_name' => 'required',
            'sp_index' => 'required',
        ]);
        DB::table('warning_categories')->insert([
            'sp_name' => $request->sp_name,
            'sp_index' => $request->sp_index
        ]);
        return redirect('warning_categories')->with('status', 'Category added successfully');
    }

    public function edit($id)
    {
        $warningCategories = DB::table('warning_categories')->where('id', $id)->first();
        return view('warningCat/edit', compact('warningCategories'));
    }

    public function editProcess(Request $request, $id)
    {
        $request->validate([
            'sp_name' => 'required',
            'sp_index' => 'required',
        ]);
        DB::table('warning_categories')->where('id', $id)
        ->update([
            'sp_name' => $request->sp_name,
            'sp_index' => $request->sp_index
        ]);
        return redirect('warning_categories')->with('status', 'Category updated successfully');
    }

    public function delete($id)
    {
        DB::table('warning_categories')->where('id', $id)->delete();
        return redirect('warning_categories')->with('status', 'Category deleted successfully');
    }
}
