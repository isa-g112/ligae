<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Http\Models\Game;
use App\Models\Game as ModelsGame;

class Goal extends Model
{

    public function game()
    {
        return $this->belongsTo(ModelsGame::class, 'game_id');
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
