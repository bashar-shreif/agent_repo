<?php

use App\Http\Controllers\AgentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

//Note: I am reading the documentation, and I used the methods that seemed important to me and checked how the methods were written in the Builder Class, I hope you don't get mad about it.
//But I wanted to understand as much as I can rather than covering and using methods on a very high level.


//using find()
Route::get("/agent/{?id}", [AgentController::class, "getAgents"]);
//using create () and update ()
Route::post("/agent/add/{id?}", [AgentController::class, "updateOrCreateAgent"]);
//using getOriginal()
Route::get("/agent/original/{id?}", [AgentController::class, "getOriginalAgent"]);
//using where(), pluck(), and findMany()
Route::get("/agent/by_company/{company}", [AgentController::class, "findByCompany"]);
//using destroy() and delete()
Route::post("/agent/delete/{id?}", [AgentController::class, "deleteAgent"]);
Route::post("/agent/destroy/{id?}", [AgentController::class,"destroyAgent"]); // zaher destroy 3emlina krmel bs y3assib l client ym7e bala ma y3rf shu ma7a :)

Route::get("", [AgentController::class, ""]);

Route::post("", [AgentController::class, ""]);
