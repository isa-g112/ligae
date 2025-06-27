<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'code','name','city','stadium','capacity','founded_year','president_id'
    ];

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function president()
    {
        return $this->belongsTo(President::class);
    }

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }

}
