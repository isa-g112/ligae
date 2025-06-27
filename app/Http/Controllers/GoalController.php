<?php


namespace App\Http\Controllers;

use App\Models\goal;
use App\Models\Game;
use App\Models\Player;
use Illuminate\Http\Request;

class GoalController extends Controller
{
    public function create()
    {
        $games = Game::all();
        $players = Player::all();
        return view('goals.create', compact('games','players'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'code'=>'required|unique:goals,code',
            'minute'=>'required|integer|min:0|max:120',
            'description'=>'nullable',
            'match_id'=>'required|exists:matches,id',
            'player_id'=>'required|exists:players,id',
        ]);

        Goal::create($data);
        return redirect()->back()->with('success','Goal registered!');
    }
}
