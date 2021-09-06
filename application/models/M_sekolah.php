<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_sekolah extends CI_Model {

    public function simpan($data){
        $this->db->insert('tbl_sekolah', $data);
    }

    public function tampil(){
        return $this->db->order_by('id_sekolah', 'DESC')->get('tbl_sekolah')->result();
    }

}

/* End of file ModelName.php */
