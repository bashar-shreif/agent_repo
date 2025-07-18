<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Agent;
class AiModel extends Model
{
    public function agents()
    {
        return $this->belongsToMany(Agent::class, 'ai_models_agents', 'agent_id', 'ai_model_id');

    }
}
