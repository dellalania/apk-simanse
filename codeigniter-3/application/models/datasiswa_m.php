<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datasiswa_m extends CI_Model {  

    public function get ($id_siswa = null)
    {
        $this->db->from('tbl_siswa');
        if($id_siswa !=null){
            $this->db->where('id_siswa',$id_siswa);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['nama']= $post['nama'];
        $params['nis']= $post['nis'];
        $params['tempat_lahir']= $post['tempat_lahir'];
        $params['tanggal_lahir']= $post['tanggal_lahir'];
        $params['jenis_kelamin']= $post['jenis_kelamin'];
        $params['no_tlp']= $post['no_tlp'];
        $params['alamat']= $post['alamat'];
        $this->db->insert('tbl_siswa',$params);
    }

    public function del ($id)
    {
        $this->db->where('id_siswa',$id);
        $this->db->delete('tbl_siswa');
    }

    public function edit($post)
    {
        $params['nama']= $post['nama'];
        $params['nis']= $post['nis'];
        $params['tempat_lahir']= $post['tempat_lahir'];
        $params['tanggal_lahir']= $post['tanggal_lahir'];
        $params['jenis_kelamin']= $post['jenis_kelamin'];
        $params['no_tlp']= $post['no_tlp'];
        $params['alamat']= $post['alamat'];
        $this->db->where('id_siswa', $post['id']);
        $this->db->update('tbl_siswa', $params);

    }

}