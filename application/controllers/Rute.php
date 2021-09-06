<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Rute extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Tampilan Rute',
            'isi'=> 'content/v_rute'
        );

        $this->load->view('template/v_wrapper', $data, FALSE);
    }


}

/* End of file Rute.php */


?>