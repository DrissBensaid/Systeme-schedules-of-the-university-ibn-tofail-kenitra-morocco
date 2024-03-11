<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Reservation;

class Salle extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_salle',
        'nbr_places',
        'nom_faculte'
    ];


    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function groupe(): BelongsTo
    {
        return $this->belongsTo(Groupe::class , 'groupe_id' , 'id');
    }
}
