<?php

namespace App\Models;

use App\Models\Cite;
use App\Models\Achat;
use App\Models\Logement;
use App\Models\Province;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agence extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_agence';
    public $incrementing = true ;
    protected $fillable = [
        'lib_agence',
        'adrs_agence',
        'code_province'
    ];

    public function logements(){
        return $this->hasMany(Logement::class, 'id_agence', 'id_agence');
    }

    public function province(){
        return $this->belongsTo(Province::class, 'code_province', 'code_province');
    }

    public function cites(){
        return $this->hasMany(Cite::class, 'id_agence', 'id_agence');
    }

    public function achats(){
        return $this->hasMany(Achat::class,'id_agence', 'id_agence');
    }
}
