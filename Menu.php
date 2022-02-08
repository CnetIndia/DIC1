<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Menu extends Model
{
    protected $table = 'comm_menus';
   protected $fillable = ['menu_name','p_menu_id','controller_name'];

   
    
    public function childs() {
        return $this->hasMany('App\models\Menu','p_menu_id','id') ;
    }
}