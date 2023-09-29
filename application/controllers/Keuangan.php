<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Keuangan extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('m_model');
		$this->load->helper('my_helper');
		$this->load->library('upload');
        if($this->session->userdata('logged_in')!=true && $this->session->userdata('role') != 'keuangan'){
            redirect(base_url().'auth');
        }
	}

	public function index()
		{
			$data['siswa'] = $this->m_model->get_data('siswa')->num_rows();
			$this->load->view('keuangan/index', $data);
		}

	public function pembayaran()
		{
			$data['siswa'] = $this->m_model->get_data('siswa')->result();
			$data['pembayaran'] = $this->m_model->get_data('pembayaran')->result();
			$this->load->view('keuangan/pembayaran',$data);
		}
	
	public function tambah_pembayaran()
		{
			$data['siswa'] = $this->m_model->get_data('siswa')->result();
			$this->load->view('keuangan/tambah_pembayaran', $data);
		}
	
	public function aksi_tambah_pembayaran()
		{
				$data = [
					'total_pembayaran' => $this->input->post('total_pembayaran'),
					'jenis_pembayaran' => $this->input->post('jenis_pembayaran'),
					'id_siswa' => $this->input->post('id_siswa'),
				];
		
				$this->m_model->tambah_data('pembayaran', $data);
				redirect(base_url('keuangan/pembayaran'));
		}
}
?>