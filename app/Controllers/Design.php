<?php namespace App\Controllers;

class Design extends BaseController{

	public function index(){
		return $this->getView([
			"pageName" => "安全軟體設計概論",
			"viewName" => "design"
		]);
	}

}
