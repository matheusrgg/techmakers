<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Http\Controllers\Auth;



class Produto extends Model{

  protected $table = 'produtos';
  protected $primaryKey = 'id'; 

  // Por questões de segurança não é usado colocar os campos que o usuário não deve 
  // preencher no fillable. Campos como id, timestamps...
  protected $fillable = [
      'name',
      'description',
      'foto',
      'price',
      'quantity',
      'status',
      'categoria',
      'oferta',
      'gamer',
      'pessoal1',
      'pessoal2',
      'profissional1',
      'profissional2',
      'profissional3',
      'profissional4',      
  ];

    // Fazendo a associação das tabelas para cruzar dados de produtos e users.
    public function user() 
     {
      return $this->belongsTo('App\User');
     }  

}


