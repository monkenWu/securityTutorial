<?php namespace App\Controllers;

class Testing extends BaseController{

	public function index(){
		return $this->getView([
			"pageName" => "軟體安全測試",
			"viewName" => "testing"
		]);
	}

}
