<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odeljenje extends Model
{
    use HasFactory;
    
    protected $fillable = ['naziv', 'opis'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
