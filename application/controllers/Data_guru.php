<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_guru extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('dataguru_m');
	}

	public function index()
	{
		$data['row'] = $this->dataguru_m->get();
		$this->template->load('template','datasekolah/data_guru.php',$data);
	}

	public function add()
	{
		$tbl_gurupns = new stdClass();
		$tbl_gurupns ->id_gurupns = null;
		$tbl_gurupns ->nama = null;
		$tbl_gurupns ->nip = null;
        $tbl_gurupns ->pangkat = null;
        $tbl_gurupns ->jabatan = null;
		$tbl_gurupns ->masa_gol = null;
        $tbl_gurupns ->jenis_kelamin = null;
        $tbl_gurupns ->pendidikan = null;
		$tbl_gurupns ->ttl = null;
        $tbl_gurupns ->jurusan = null;
        $tbl_gurupns ->th_lulus = null;
		$data = array(
			'page' => 'add',
			'row' => $tbl_gurupns 
		);
		$this->template->load('template', 'tambah_guru', $data);
	}	

	public function process() 
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['add'])) {
			$this->dataguru_m->add($post);
		} else if(isset($_POST['edit'])) {
			$this->dataguru_m->edit($post);
		}
		if($this->db->affected_rows() > 0) {
			echo"<script>alert('data berhasil disimpan');</script>";
		}
		echo "<script>window.location='".site_url('data_guru')."';</script>";
		
	}

	public function del($id)
	{
		$this->dataguru_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo"<script>alert('data berhasil dihapus');</script>";
		}
		echo "<script>window.location='".site_url('data_guru')."';</script>";
		
	}
	
	public function edit($id)
	{
		$query = $this->dataguru_m->get($id);
		if($query->num_rows() > 0) {
			$tbl_gurupns = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $tbl_gurupns
			);
			$this->template->load('template', 'tambah_guru', $data);
		} else {
			echo"<script>alert('data tidak ditemukan');</script>";
			echo "<script>window.location='".site_url('data_guru')."';</script>";
		}
	}
}