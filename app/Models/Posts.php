<?php
namespace EasyCMS\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
   
   protected $timestamp = true;
   
   /*
    * Get All Page Name
	*/
   public function getPagesFromPost(){
		return $this->distinct()->select('page')->groupBy('page')->orderBy('page')->get();   
   }
   
}
