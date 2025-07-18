<?php

namespace App\Services;
use App\Models\Agent;

class AgentService
{
    public static function getAgents($agent_id)
    {

        $agent = $agent_id ? Agent::find($agent_id) : Agent::all();
        return $agent;
    }

    public static function updateOrCreateAgent($agent_id, $agent)
    {
        if ($agent_id) {
            $agent = Agent::create(['name' => $agent->name, 'type' => $agent->type, 'company'->$agent->company]);
            return $agent;
        }
        $updated = new Agent();
        $updated->update($agent);
        return $agent;
    }

    public static function getOriginalAgent($agent_id)
    {
        $agent = Agent::find($agent_id);
        return $agent->getOriginal();
    }

    public static function findByCompany($company)
    {
        $agent = Agent::where('company', $company);
        $ids = $agent->pluck('id');
        $agents = Agent::findMany($ids);

        return $agents;
    }
    public static function deleteAgent($agent_id)
    {
        $agent = Agent::find($agent_id);
        return $agent->delete();
    }
    public static function destroyAgent($agent_id) {
        return Agent::destroy( $agent_id );
    }


}
