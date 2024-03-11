<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Module extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'moduleFr' , 
        'moduleAr' , 
        'semestre_id',

    ];

    public function semestre(): BelongsTo
    {
        return $this->belongsTo(Semestre::class);
    }

    public function groupes(): HasMany
    {
        return $this->hasMany(Groupe::class);
    }
}
