<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'GIS',
            'isi'=> 'v_home'
        );

        $this->load->view('template/v_wrapper', $data, FALSE);
    }

}

/* End of file Controllername.php */
