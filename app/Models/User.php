<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public function account(){
        return $this->belongsTo(Account::class);
    }
    public function subsecriperes(){
        return $this->hasMany(Subscripe::class);
    }
}
