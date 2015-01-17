<?php
namespace Technasium;

$alerts = array();

Class AlertRepo{

	protected $defer = false;

	public static function fetchAll(){
		global $alerts;
		return $alerts;
	}

	public static function add(Alert $alert){
		global $alerts;
		$alerts[] = $alert;
	} 

}