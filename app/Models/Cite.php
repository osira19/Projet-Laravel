<?php

namespace App\Models;

use App\Models\Agence;
use App\Models\Logement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cite extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_cite';
    public $incrementing = true;
    protected $fillable = [
        'lib_cite',
        'id_agence'
    ];

    public function logements(){
        return $this->hasMany(Logement::class, 'id_cite', 'id_cite');
    }

    public function agence(){
        return $this->belongsTo(Agence::class, 'id_agence', 'id_agence');
    }
}
