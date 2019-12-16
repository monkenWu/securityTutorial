<?php namespace App\Controllers;

class Cloud extends BaseController{

	public function index(){
		return $this->getView([
			"pageName" => "安全雲端程式設計",
			"viewName" => "cloud"
		]);
	}

}
