<?php

namespace App\Http\Controllers;

use App\Services\AgentService;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function getAgents($id = null)
    {
        $agent = AgentService::getAgents($id);
        return ResponseTrait::responseJSON($agent);
    }

    public function updateOrCreateAgent(Request $request, $id = null) {
        $agent = AgentService::updateOrCreateAgent($id, $request->all());
        return ResponseTrait::responseJSON($agent);
    }

    public function getOriginalAgent($id) {
        $agent = AgentService::getOriginalAgent($id);
        return ResponseTrait::responseJSON($agent);
    }

    public function findByCompany($company) {
        $agents = AgentService::findByCompany($company);
        return ResponseTrait::responseJSON($agents);
    }

    public function deleteAgent($id) {
        $agent = AgentService::deleteAgent($id);
        return ResponseTrait::responseJSON($agent);
    }
    public function destroyAgent($id) {
        $agent = AgentService::destroyAgent($id);
        return ResponseTrait::responseJSON($agent);
    }
}
