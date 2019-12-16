<?php namespace App\Controllers;

class Security extends BaseController{

	public function index(){
		return $this->getView([
			"pageName" => "資訊安全概論",
			"viewName" => "security"
		]);
	}

}
