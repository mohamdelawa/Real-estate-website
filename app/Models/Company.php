<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    public function account(){
        $this->belongsTo(Account::class);
    }
    public function realestates(){
        $this->hasMany(Realestate::class);
    }
    public function subsecriperes(){
        $this->hasMany(Subscripe::class);
    }
}