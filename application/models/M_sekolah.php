<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_sekolah extends CI_Model {

    public function simpan($data){
        $this->db->insert('tbl_sekolah', $data);
    }

    public function tampil(){
        return $this->db->order_by('id_sekolah', 'DESC')->get('tbl_sekolah')->result();
    }

    public function detail($id_sekolah){
        return $this->db->select('*')->from('tbl_sekolah')->where('id_sekolah', $id_sekolah)->get()->row();
    }

    public function edit($data){
        $this->db->where('id_sekolah', $data['id_sekolah']);
        $this->db->update('tbl_sekolah', $data);
    }

    public function hapus($data){
        $this->db->where('id_sekolah', $data['id_sekolah']);
        $this->db->delete('tbl_sekolah', $data);
    }

}

/* End of file ModelName.php */
