<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataguru_m extends CI_Model {  

    public function get ($id_gurupns = null)
    {
        $this->db->from('tbl_gurupns');
        if($id_gurupns !=null){
            $this->db->where('id_gurupns',$id_gurupns);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['nama']= $post['nama'];
        $params['nip']= $post['nip'];
        $params['pangkat']= $post['pangkat'];
        $params['jabatan']= $post['jabatan'];
        $params['masa_gol']= $post['masa_gol'];
        $params['pangkat']= $post['pangkat'];
        $params['jenis_kelamin']= $post['jenis_kelamin'];
        $params['pendidikan']= $post['pendidikan'];
        $params['ttl']= $post['ttl'];
        $params['jurusan']= $post['jurusan'];
        $params['th_lulus']= $post['th_lulus'];
        $this->db->insert('tbl_gurupns',$params);
    }

    public function del ($id)
    {
        $this->db->where('id_gurupns',$id);
        $this->db->delete('tbl_gurupns');
    }

    public function edit($post)
    {
        $params['nama']= $post['nama'];
        $params['nip']= $post['nip'];
        $params['pangkat']= $post['pangkat'];
        $params['jabatan']= $post['jabatan'];
        $params['masa_gol']= $post['masa_gol'];
        $params['pangkat']= $post['pangkat'];
        $params['jenis_kelamin']= $post['jenis_kelamin'];
        $params['pendidikan']= $post['pendidikan'];
        $params['ttl']= $post['ttl'];
        $params['jurusan']= $post['jurusan'];
        $params['th_lulus']= $post['th_lulus'];
        $this->db->where('id_gurupns', $post['id']);
        $this->db->update('tbl_gurupns', $params);

    }

}