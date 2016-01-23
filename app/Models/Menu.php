<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $timestamp = true;
	
	public $table = 'menu';
	
	/**
	 * Get All Menu Items Order By Name
	 */
	 public function getAllMenuItems(){
		
		return $this->select(['id', 'title_fr'])->orderBy('title_fr')->get(); 
		 
	 }
}
