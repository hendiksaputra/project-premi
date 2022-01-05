<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpCategoryController extends Controller
{
    public function index()
    {
        $spCategories = DB::table('sp_categories')->get();
        return view('spCat.index', compact('spCategories'));
    }

    public function add()
    {
        return view('spCat.add');
    }

    public function addProcess(Request $request)
    {
        $request->validate([
            'sp_name' => 'required',
            'sp_index' => 'required',
        ]);
        DB::table('sp_categories')->insert([
            'sp_name' => $request->sp_name,
            'sp_index' => $request->sp_index
        ]);
        return redirect('sp_categories')->with('status', 'Category added successfully');
    }

    public function edit($id)
    {
        $spCategories = DB::table('sp_categories')->where('id', $id)->first();
        return view('spCat/edit', compact('spCategories'));
    }

    public function editProcess(Request $request, $id)
    {
        $request->validate([
            'sp_name' => 'required',
            'sp_index' => 'required',
        ]);
        DB::table('sp_categories')->where('id', $id)
        ->update([
            'sp_name' => $request->sp_name,
            'sp_index' => $request->sp_index
        ]);
        return redirect('sp_categories')->with('status', 'Category updated successfully');
    }

    public function delete($id)
    {
        DB::table('sp_categories')->where('id', $id)->delete();
        return redirect('sp_categories')->with('status', 'Category deleted successfully');
    }
}
