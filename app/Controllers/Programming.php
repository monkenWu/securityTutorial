<?php namespace App\Controllers;

class Programming extends BaseController{

	public function index(){
		return $this->getView([
			"pageName" => "安全程式設計概論",
			"viewName" => "programming"
		]);
	}

}
