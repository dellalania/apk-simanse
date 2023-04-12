<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guruhonor extends CI_Controller {


	public function index()
	{
		$this->template->load('template','datasekolah/data_guruhonor.php');
	}
}