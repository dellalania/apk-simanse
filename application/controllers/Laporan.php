<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {


	public function index()
	{
		$this->template->load('template','dashboard/laporan.php');
	}
}