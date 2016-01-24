<?php

namespace EasyCMS\Http\Controllers;

use Illuminate\Http\Request;

use EasyCMS\Http\Requests;
use EasyCMS\Http\Controllers\Controller;

use EasyCMS\Models\Movies;

class DashboardController extends Controller
{
    
	/*
	 * Display view with all help movies
	 */
	public function show(Movies $MoviesModel){
		
		$movies = $MoviesModel->all();
		
		return view('admin.dashboard')
		->withPageTitle('Accueil')
		->withMovies($movies);
	}
}
