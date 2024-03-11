<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    use HasFactory;
    
    protected $fillable = ['semestre' , 'capacite' , 'filiere_id'];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function module(): HasMany
    {
        return $this->hasMany(Module::class);
    }

    public function cours()
    {
        return $this->hasMany(Cours::class);
    }
}
