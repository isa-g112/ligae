<?php


namespace App\Http\Controllers;

use App\Models\game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::paginate(10);
        return view('game.index', compact('games'));
    }

    public function create()
    {
        return view('game.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'code' => 'required|unique:matches,code',
            'date' => 'required|date',
            'home_goals' => 'required|integer|min:0',
            'away_goals' => 'required|integer|min:0',
        ]);
        Game::create($data);
        return redirect()->route('game.index')->with('success', 'Juego creado correctamente');
    }

    public function show(Game $game)
    {
        return view('game.show', compact('game'));
    }

    public function edit(Game $game)
    {
        return view('game.edit', compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $data = $request->validate([
            'code' => 'required|unique:matches,code,' . $game->id,
            'date' => 'required|date',
            'home_goals' => 'required|integer|min:0',
            'away_goals' => 'required|integer|min:0',
        ]);
        $game->update($data);
        return redirect()->route('game.index')->with('success', 'Juego actualizado correctamente');
    }

    public function destroy(Game $game)
    {
        $game->delete();
        return redirect()->route('game.index')->with('success', 'Juego eliminado correctamente');
    }
}
