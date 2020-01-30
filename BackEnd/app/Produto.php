<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
  ];

    // Fazendo a associação das tabelas para cruzar dados de guardians e users.
    public function user() 
     {
      return $this->belongsTo('App\User');
     }  

}
