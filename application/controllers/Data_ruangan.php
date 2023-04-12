<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_ruangan extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('dataruangan_m');
	}

	public function index()
	{
		$data['row'] = $this->dataruangan_m->get();
		$this->template->load('template','datasekolah/data_ruangan.php',$data);
	}

	public function add()
	{
		$tbl_ruangan = new stdClass();
		$tbl_ruangan ->id_ruangan = null;
		$tbl_ruangan ->nama_ruangan = null;
		$tbl_ruangan ->jumlah_ruangan = null;
		$tbl_ruangan ->kondisi_ruangan = null;
		$data = array(
			'page' => 'add',
			'row' => $tbl_ruangan 
		);
		$this->template->load('template', 'tambah_ruangan', $data);
	}	

	public function process() 
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->dataruangan_m->add($post);
		} else if(isset($_POST['edit'])) {
			$this->dataruangan_m->edit($post);
		}
		if($this->db->affected_rows() > 0) {
			echo"<script>alert('data berhasil disimpan');</script>";
		}
		echo "<script>window.location='".site_url('data_ruangan')."';</script>";
		
	}

	public function del($id)
	{
		$this->dataruangan_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo"<script>alert('data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('data_ruangan')."';</script>";
		
	}
	
	public function edit($id)
	{
		$query = $this->dataruangan_m->get($id);
		if($query->num_rows() > 0) {
			$tbl_ruangan = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $tbl_ruangan
			);
			$this->template->load('template', 'tambah_ruangan', $data);
		} else {
			echo"<script>alert('data tidak ditemukan');</script>";
			echo "<script>window.location='".site_url('data_ruangan')."';</script>";
		}
	}
}