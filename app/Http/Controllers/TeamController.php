<?php


namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::paginate(10);
        return view('team.index', compact('teams'));
    }

    public function create()
    {
        return view('team.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:teams,name',
            'city' => 'required',
            'foundation_year' => 'required|integer|min:1800|max:' . date('Y'),
        ]);
        Team::create($data);
        return redirect()->route('team.index')->with('success', 'Equipo creado correctamente');
    }

    public function show(Team $team)
    {
        return view('team.show', compact('team'));
    }

    public function edit(Team $team)
    {
        return view('team.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $data = $request->validate([
            'name' => 'required|unique:teams,name,' . $team->id,
            'city' => 'required',
            'foundation_year' => 'required|integer|min:1800|max:' . date('Y'),
        ]);
        $team->update($data);
        return redirect()->route('team.index')->with('success', 'Equipo actualizado correctamente');
    }

    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('team.index')->with('success', 'Equipo eliminado correctamente');
    }
}
