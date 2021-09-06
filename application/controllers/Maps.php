<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Maps extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Tampilan Maps',
            'isi'=> 'content/v_maps'
        );

        $this->load->view('template/v_wrapper', $data, FALSE);
    }
}

/* End of file Controllername.php */
