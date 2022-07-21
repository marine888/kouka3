<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    protected $guarded = array('id');

   public static $rules = array(
      'name' => 'required',
      'email' => 'required',
      'memo' => 'required'
   );

    public function getData()
    {
   return $this->name . $this->mail;
}
}




