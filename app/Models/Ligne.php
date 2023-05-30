<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligne extends Model
{
    use HasFactory;
    public function orders() {
        return $this->belongsTo(Order::class);
    }
    public function tickets() {
        return $this->belongsTo(Ticket::class);
    }
    public function events() {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
