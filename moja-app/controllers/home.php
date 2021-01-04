<?php

class Home extends Controller{

	public function index(){

			$logged = Session::get('loggedIn');	

				if ($logged == false) {				

					Session::destroy();					

					header('location: ' . BASEURL .  'login');

					exit;			

				}else{

					header('location: ' . BASEURL .  'dashboard');

					exit;

				}
	}

}