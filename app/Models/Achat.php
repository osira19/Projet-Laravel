<?php

namespace App\Models;

use App\Models\Agence;
use App\Models\Client;
use App\Models\Logement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Achat extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_achat';
    public $incrementing = true;
    protected $fillable = [
        'id_cli',
        'id_agence',
        'num_lgmt'
    ];

    public function agence(){
        return $this->belongsTo(Agence::class, 'id_agence', 'id_agence');
    }

    public function client(){
        return $this->belongsTo(Client::class, 'id_cli', 'id_cli');
    }

    public function logement(){
        return $this->belongsTo(Logement::class, 'num_lgmt', 'num_lgmt');
    }
}
