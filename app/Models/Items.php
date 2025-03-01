<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    public $fillable=["name","damage","id_champs"];

    public function champs(){
        return $this->belongsTo(Champs::class, 'id_champs');
    }
}
