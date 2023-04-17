<?php

namespace App\Models;

use App\Models\Cite;
use App\Models\Achat;
use App\Models\Agence;
use App\Models\Terrain;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Logement extends Model
{
    use HasFactory;
    protected $primaryKey = 'num_lgmt';
    public $incrementing = true;
    protected $fillable = [
        'apropos',
        'prix_lgmt',
        'id_agence',
        'id_cite',
        'num_terrain',
        'statut'
    ];

    public function agence(){
        return $this->belongsTo(Agence::class, 'id_agence', 'id_agence');
    }

    public function cite(){
        return $this->belongsTo(Cite::class, 'id_cite', 'id_cite');
    }

    public function terrain(){
        return $this->belongsTo(Terrain::class, 'num_terrain', 'num_terrain');
    }

    public function achats(){
        return $this->hasMany(Achat::class,'num_lgmt', 'num_lgmt');
    }
}
