<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function villes() {
        return $this->belongsTo(Villes::class);
    }
    public function ligne() {
        return $this->hasMany(Ligne::class);
    }
    public function orders() {
        return $this->belongsTo(Order::class);
    }

}
