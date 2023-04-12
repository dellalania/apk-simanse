<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataruangan_m extends CI_Model {  

    public function get ($id_ruangan = null)
    {
        $this->db->from('tbl_ruangan');
        if($id_ruangan !=null){
            $this->db->where('id_ruangan',$id_ruangan);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['nama_ruangan']= $post['nama_ruangan'];
        $params['jumlah_ruangan']= $post['jumlah_ruangan'];
        $params['kondisi_ruangan']= $post['kondisi_ruangan'];
        $this->db->insert('tbl_ruangan',$params);
    }

    public function del ($id)
    {
        $this->db->where('id_ruangan',$id);
        $this->db->delete('tbl_ruangan');
    }

    public function edit($post)
    {
        $params['nama_ruangan']= $post['nama_ruangan'];
        $params['jumlah_ruangan']= $post['jumlah_ruangan'];
        $params['kondisi_ruangan']= $post['kondisi_ruangan'];
        $this->db->where('id_ruangan', $post['id']);
        $this->db->update('tbl_ruangan', $params);

    }

}