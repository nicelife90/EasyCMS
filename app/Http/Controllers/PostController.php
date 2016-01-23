<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Posts;
use App\Models\Menu;

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
