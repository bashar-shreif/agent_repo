<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Agent;

class Owner extends Model
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    use HasFactory;
    protected $fillable = [
        'name',
        'agent_id'
    ];

    //adding one to one rlt
    public function agent()
    {
        return $this->hasOne(Agent::class, 'agent_id', 'id');

    }
}
