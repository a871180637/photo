<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
	public function index(){
		return $this->fetch();
	}

	public function detail1(){
		return $this->fetch();
	}    

	public function detail2(){
		return $this->fetch();
	}

}
