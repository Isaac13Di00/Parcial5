<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        "client_id",
        "date_reservation",
        "price",
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
