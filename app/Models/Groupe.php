<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomGroupe' , 
        'module_id',

    ];

    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }


}
