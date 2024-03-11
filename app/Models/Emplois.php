<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplois extends Model
{
    use HasFactory;
    protected $fillable = [
                    'list1','salle1','list2','salle2',
                    'list3','salle3','list4','salle4',        
                    'list5','salle5','list6','salle6',        
                    'list7','salle7','list8','salle8',        
                  'list9','salle9','list10','salle10',        
                'list11','salle11','list12','salle12',        
                'list13','salle13','list14','salle14',        
                'list15','salle15','list16','salle16',        
                'list17','salle17','list18','salle18',        
                'list19','salle19','list20','salle20',        
                'list21','salle21','list22','salle22',        
                'list23','salle23','list24','salle24',        
                'list25','salle25','list26','salle26',        
                'list27','salle27','list28','salle28',        
                'list29','salle29','list30','salle30',        
                'list31','salle31','list32','salle32',        
                'list33','salle33','list34','salle34',        
                'list35','salle35','list36','salle36',        
                      'annee1','annee2','semestre_id',
                 'filiere','nomGroupe','nomSemestre'];
}
