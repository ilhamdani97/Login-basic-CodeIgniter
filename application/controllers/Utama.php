<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

	public function index()
	{
		$this->load->view('tampilan_utama');
	}
}
