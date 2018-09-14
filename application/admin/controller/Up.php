<?php 
namespace app\admin\controller;
use think\Controller;

class Up extends Controller
{
	public function updata(){
			$file = $_FILES;
			print_r($file);
	}

}
 ?>