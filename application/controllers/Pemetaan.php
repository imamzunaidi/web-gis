<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pemetaan extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Tampilan Pemetaan',
            'isi'=> 'pemetaan/v_pemetaan',
            'data_sekolah' => $this->M_sekolah->tampil(),
        );

        $this->load->view('template/v_wrapper', $data, FALSE);
    }

}

/* End of file Controllername.php */
