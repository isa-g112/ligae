<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\Goal;

class game extends Model
{
    use HasFactory;

    protected $table = 'games';

    protected $fillable = [
        'code','date','home_goals','away_goals'
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class)->withPivot('is_home')->withTimestamps();
    }

    public function goals()
    {
        return $this->hasMany(Goal::class, 'game_id');
    }
}
