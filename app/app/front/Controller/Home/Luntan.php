<?php
namespace Controller\Home;
//http://localhost/yii-basic-2.0.15/basic/web/index.php?r=site%2Flogin
use Controller\Controller;
use Model\DB;

/**
* 
*/
class Luntan extends Controller
{
	public function index()
	{
	    $this->display('fron/index');

	}

	public function duanzi()
	{
	    $this->display('fron/duanzi');

	}

	public function ganhuo()
	{
	    $this->display('fron/ganhuo');

	}

	public function sos()
	{
	    $this->display('fron/sos');

	}

	public function xiangqing()
	{
	    $this->display('fron/xiangqing');

	}

	public function doLogin()
	{
		print_r($_POST);
	}

	public function register()
	{
		echo "this is register action";
	}
}
	


