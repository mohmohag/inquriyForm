<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    //
    protected $table = 'inquiry';
   protected $fillable = ['name', 'gender', 'email', 'url', 'detail','created_at','updated_at'];

   public function getAll( $filters = array() ){
     $users = $this->select('*');
     foreach( $filters as $key => $value ){
       $users->where( $value['field'], $value['operation'], $value['value'] );
     }
     return $users->paginate(10);
   }

}
