<?php


namespace App\Http\Controllers;

use App\Models\President;
use App\Models\Team;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    public function index()
    {
        $presidents = President::paginate(10);
        return view('presidents.index', compact('presidents'));
    }

    public function create()
    {
        return view('presidents.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'dni'=>'required|unique:presidents,dni',
            'name'=>'required',
            'last_name'=>'required',
            'birth_date'=>'required|date',

        ]);

        President::create($data);
        return redirect()->route('presidents.index')->with('success','President created!');
    }

    public function show(President $president)
    {
        return view('presidents.show', compact('president'));
    }

    public function edit(President $president)
    {
        return view('presidents.edit', compact('president'));
    }

    public function update(Request $request, President $president)
    {
        $data = $request->validate([
            'dni'=>'required|unique:presidents,dni,'.$president->id,
            'name'=>'required',
            'last_name'=>'required',
            'birth_date'=>'required|date',
            
        ]);

        $president->update($data);
        return redirect()->route('presidents.index')->with('success','President updated!');
    }

    public function destroy(President $president)
    {
        $president->delete();
        return redirect()->route('presidents.index')->with('success','President deleted');
    }
}
