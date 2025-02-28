<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Champs extends Model
{

    use HasFactory;
    public $fillable=["name","region","Rol","difficulty","RPCost"];

    public function items()
    {
        return $this->hasMany(Items::class, 'id');
    }


}
