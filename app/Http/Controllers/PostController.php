<?php

namespace EasyCMS\Http\Controllers;

use Illuminate\Http\Request;

use EasyCMS\Http\Requests;
use EasyCMS\Http\Controllers\Controller;

use EasyCMS\Models\Posts;
use EasyCMS\Models\Menu;

class PostController extends Controller
{
	
	/**
	 * Show all posts
	 */
    public function show(Posts $PostsModel, Menu $MenuModel){
		
		$menus = $MenuModel->getAllMenuItems();
		$posts = $PostsModel->all();
		
		return 	view('admin.post.show')
				->withPageTitle('Articles')
				->withPosts($posts)
				->withMenus($menus);	
	}
	
	/*
	 * Edit post
	 */
	public function edit($id){
		return 	view('admin.post.edit')
				->withPageTitle('Modification d\'un article');
	}
}
