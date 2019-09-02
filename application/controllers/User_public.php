<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_public extends CI_Controller {

	public function index()
	{
		$this->load->view('user_public/index');
	
	}
}
