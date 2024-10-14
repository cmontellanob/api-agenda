<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    /** @use HasFactory<\Database\Factories\AgendaFactory> */
    use HasFactory;
    protected $fillable=[
        'ci',
        'nombres',
        'apellidos',
        'celular',
        'email',
        'profesion_id'
    ];
    public function profesion(){
        return $this->belongsTo(Profesion::class, 'profesion_id');
    }
}
