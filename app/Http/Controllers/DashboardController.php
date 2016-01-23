<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Movies;

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
