<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Polyline extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Tampilan Polyline',
            'isi'=> 'content/v_polyline'
        );

        $this->load->view('template/v_wrapper', $data, FALSE);
    }

}

/* End of file Polyline.php */
