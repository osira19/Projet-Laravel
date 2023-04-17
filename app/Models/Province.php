<?php

namespace App\Models;

use App\Models\Agence;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Province extends Model
{
    use HasFactory;
    protected $primaryKey = 'code_province';
    public $incrementing = true;
    protected $fillable = [
        'nom_province'
    ];

    public function agences(){
        return $this->hasMany(Agence::class, 'code_province', 'code_province');
    }
}
