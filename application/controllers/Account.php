<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	function login()
	{
		$data['content']	= 'account/login';
		$this->load->view('template/login',$data);
	}
	
	function register()
	{
		$data['content']	= 'account/register';
		$this->load->view('template/login',$data);
	}
	
	function forgotpassword()
	{
		$data['content']	= 'account/forgotpassword';
		$this->load->view('template/login',$data);
	}
}
