<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Maker extends CI_Controller {

    public function index(){
        $data = array(
            'title' => 'Membuat Maker',
            'isi'=> 'content/v_maker'
        );

        $this->load->view('template/v_wrapper', $data, FALSE);
    }

}

/* End of file Controllername.php */
