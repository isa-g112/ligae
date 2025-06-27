<?php


namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::paginate(10);
        return view('player.index', compact('players'));
    }

    public function create()
    {
        return view('player.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'dni' => 'required|unique:players,dni',
            'name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required|date',
            'position' => 'required',
            'team_id' => 'required|exists:teams,id',
        ]);
        Player::create($data);
        return redirect()->route('player.index')->with('success', 'Jugador creado correctamente');
    }

    public function show(Player $player)
    {
        return view('player.show', compact('player'));
    }

    public function edit(Player $player)
    {
        return view('player.edit', compact('player'));
    }

    public function update(Request $request, Player $player)
    {
        $data = $request->validate([
            'dni' => 'required|unique:players,dni,' . $player->id,
            'name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required|date',
            'position' => 'required',
            'team_id' => 'required|exists:teams,id',
        ]);
        $player->update($data);
        return redirect()->route('player.index')->with('success', 'Jugador actualizado correctamente');
    }

    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('player.index')->with('success', 'Jugador eliminado correctamente');
    }
}
