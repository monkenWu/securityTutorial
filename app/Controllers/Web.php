<?php namespace App\Controllers;

class Web extends BaseController{

	public function index(){
		return $this->getView([
			"pageName" => "安全網頁程式設計",
			"viewName" => "web"
		]);
	}

}
