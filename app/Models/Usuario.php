<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
        'idade',
        'email',
        'contato',
        'senha',
    ];
    
    public function buscaPorNome(string $nome = '') {
        return $this->where('nome', 'like', "%$nome%")->get();
    }
    
    
}
