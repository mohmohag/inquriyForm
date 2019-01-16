<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Inquiry extends Model
{
    //
    use Sortable;

    protected $table = 'inquiry';
   protected $fillable = ['name', 'gender', 'email', 'url', 'detail','created_at','updated_at'];

   public $sortable = ['id', 'name', 'details', 'created_at', 'updated_at'];


   public function getAll( $filters = array() ){
     $users = $this->select('*');
     foreach( $filters as $key => $value ){
       $users->where( $value['field'], $value['operation'], $value['value'] );
     }
     return $users->paginate(10);
   }

}
