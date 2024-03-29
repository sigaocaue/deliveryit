<?php

namespace CPrado\Models;

use Illuminate\Database\Eloquent\Model;

class CorredorProva extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'corredores_provas';
    protected $guarded = ['id'];

    public function corredores()
    {
        return $this->belongsToMany('CPrado\Models\Corredor', 'corredores_provas', 'id', 'corredor_id');
    }

    public function provas()
    {
        return $this->belongsToMany('CPrado\Models\ProvaCorrida', 'corredores_provas', 'id', 'prova_id');
    }
}
