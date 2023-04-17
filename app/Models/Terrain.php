<?php

namespace App\Models;

use App\Models\Logement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Terrain extends Model
{
    use HasFactory;
    protected $primaryKey = 'num_terrain';
    public $incrementing = true;
    protected $fillable = [
        'superficie'
    ];

    public function logements(){
        return $this->hasMany(Logement::class, 'num_terrain', 'num_terrain');
    }
}
