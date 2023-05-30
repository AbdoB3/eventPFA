<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    public function ligne() {
        return $this->hasMany(Ligne::class);
    }
    public function events() {
        return $this->hasMany(Event::class);
    }

}
