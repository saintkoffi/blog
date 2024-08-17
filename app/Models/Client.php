<?php

namespace App\Models;

use App\Models\SMS;
use App\Models\Localite;
use App\Models\Telephonique;
use App\Models\Profil;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['numeroTelephone', 'nomPrenom'];

public function profils()
{
    return $this->hasMany(Profil::class);
}

public function telephoniques()
{
    return $this->hasMany(Telephonique::class);
}

public function localites()
{
    return $this->hasOne(Localite::class);
}

public function sms()
{
    return $this->belongsToMany(SMS::class);
}
    }
