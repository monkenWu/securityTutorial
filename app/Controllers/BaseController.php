<?php
namespace App\Controllers;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

	protected $nav = [
		"課程選擇" => [
			"path" => "course",
			"child" => [
				["path"=>"security","name"=>"資訊安全概論"],
				["path"=>"design","name"=>"安全軟體設計概論"],
				["path"=>"programming","name"=>"安全程式設計概論"],
				["path"=>"web","name"=>"安全網頁程式設計"],
				["path"=>"cloud","name"=>"安全雲端程式設計"],
				["path"=>"testing","name"=>"軟體安全測試"]
			] 
		]
	];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
	}

	public function getView($setArray){
		$setArray["nav"] = $this->nav;
		return view('template',$setArray);
	}

}
