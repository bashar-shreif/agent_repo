<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Owner;


class Agent extends Model
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    use HasFactory;
    protected $fillable = [
        'name',
        'owner_id',
        'type',
        'company',
    ];

    //Adding the one to one relationship
    public function owner()
    {
        return $this->belongsTo(Owner::class, 'owner_id', 'id');
    }
    //Adding one to may relationship
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    //Adding many to many relationship
    public function aiModels()
    {
        return $this->belongsToMany(AiModel::class);
    }
}


