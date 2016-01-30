<?php

namespace EasyCMS\Http\Controllers;

use Illuminate\Http\Request;

use EasyCMS\Http\Requests;
use EasyCMS\Http\Controllers\Controller;

use EasyCMS\Models\Settings;
use EasyCMS\Models\Menu;
use EasyCMS\Models\Posts;

class FrontendController extends Controller
{
    
	/**
	 * Redirect / to fisrt page that cannot be deleted
	 */
	public function index(Settings $settings, Menu $menu){
		return redirect()->action('FrontendController@page', [1]);	
	}
	
	/**
	 * Display Page
	 */
	public function page($id, Settings $settings, Menu $menu, Posts $post){
		
		$slogan 	= $settings->whereName('slogan_fr')->first();
		$menuItems 	= $menu->getAllMenuItems();
		$pageTitle	= $menu->find($id)->title_fr;
		$postData 	= $post->whereid($id)->get();
		
		return view('page')
		->withSlogan($slogan)
		->withMenu($menuItems)
		->withPageTitle($pageTitle)
		->withPosts($postData);
	}
}
