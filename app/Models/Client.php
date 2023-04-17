<?php

namespace App\Models;

use App\Models\Achat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_cli';
    public $incrementing = true;
    protected $fillable = [
        'nom_cli',
        'prenom_cli',
        'adrs_cli',
        'num_cli'
    ];

    public function achats(){
        return $this->hasMany(Achat::class,'id_cli', 'id_cli');
    }
}
