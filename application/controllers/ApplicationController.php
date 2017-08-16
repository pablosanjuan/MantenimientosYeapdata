<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApplicationController extends CI_Controller {
	function _construct()
	{
		parent::_construct();
		//Do your validations here
		$this->load->view('error_page');
	}
	
}
?>