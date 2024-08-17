<?php

namespace App\Models;

use App\Models\Reponse;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    public function roles()
{
    return $this->hasOne(Role::class);
}

public function reponses()
{
    return $this->hasMany(Reponse::class);
}
}
