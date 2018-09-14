<?php 
namespace app\admin\controller;
use think\Controller;

class Index extends Controller
{

	public function index(){
		return $this->fetch();
	}

	public function add(){
		return $this->fetch();
	}

	public function li(){
		return $this->fetch();
	}
}

?>