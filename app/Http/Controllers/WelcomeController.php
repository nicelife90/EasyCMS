<?php

namespace EasyCMS\Http\Controllers;

use Illuminate\Http\Request;

use EasyCMS\Http\Requests;
use EasyCMS\Http\Controllers\Controller;
use EasyCMS\Models\Settings;

class WelcomeController extends Controller
{
    public function index(Settings $settings){
		
		$slogan = $settings->whereName('slogan_fr')->first();
		
		return view('welcome')->withSlogan($slogan);	
	}
}
