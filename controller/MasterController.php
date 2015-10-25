<?php

namespace controller;

require_once("view/LayoutView.php");
require_once("view/NavigationView.php");
require_once("view/TournamentView.php");

class MasterController{

	public function __construct()
	{
        	
	}

	public function Run(){

		//CREATE OBJECTS OF THE VIEWS
		$lv = new \view\LayoutView();
		$nv = new \view\NavigationView();
		$v = new \view\TournamentView();

		$lv->render($nv,$v);

	}
}