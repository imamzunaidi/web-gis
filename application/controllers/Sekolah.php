<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Tampilan Data Sekolah',
            'isi'=> 'pemetaan/v_data_sekolah',
            'data_sekolah' => $this->M_sekolah->tampil(),
        );

        $this->load->view('template/v_wrapper', $data, FALSE);
    }

    public function input(){
        
        $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required', array(
            'required' => '%s Harus Diisi !!!' ));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array(
            'required' => '%s Harus Diisi !!!' ));
        $this->form_validation->set_rules('status_sekolah', 'Status Sekolah', 'required', array(
            'required' => '%s Harus Diisi !!!' ));
        $this->form_validation->set_rules('kepala_sekolah', 'Kepala Sekolah', 'required', array(
            'required' => '%s Harus Diisi !!!' ));
        $this->form_validation->set_rules('latitude', 'Latitude', 'required', array(
            'required' => '%s Harus Diisi !!!' ));
        $this->form_validation->set_rules('longitude', 'Longitude', 'required', array(
            'required' => '%s Harus Diisi !!!' ));
        $this->form_validation->set_rules('ket', 'Keterangan', 'required', array(
            'required' => '%s Harus Diisi !!!' ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Input Data Sekolah',
                'isi'=> 'pemetaan/v_input_sekolah'
            );
    
            $this->load->view('template/v_wrapper', $data, FALSE);
        } else {
           $data = array(
               'nama_sekolah' => $this->input->post('nama_sekolah', TRUE),
               'alamat' => $this->input->post('alamat', TRUE),
               'kepala_sekolah' => $this->input->post('kepala_sekolah', TRUE),
               'status_sekolah' => $this->input->post('status_sekolah', TRUE),
               'ket' => $this->input->post('ket', TRUE),
               'latitude' => $this->input->post('latitude', TRUE),
               'longitude' => $this->input->post('longitude', TRUE),
           );

           $this->M_sekolah->simpan($data);
           $this->session->set_flashdata('pesan', 'Data Berhasil di Simpan');
           redirect('sekolah/input','refresh');
        }
        
      
    }

}

/* End of file Sekolah.php */


?>