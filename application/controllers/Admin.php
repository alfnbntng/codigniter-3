<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_model');
		$this->load->helper('my_helper');
		$this->load->library('upload');
		if($this->session->userdata('logged_in')!=true && $this->session->userdata('role') != 'admin'){
            redirect(base_url().'auth');
        }
	}

	public function index()
		{
			$data['siswa'] = $this->m_model->get_data('siswa')->num_rows();
			$this->load->view('admin/index', $data);
		}

	public function upload_image_siswa($value)
		{
			$kode = round(microtime(true) * 1000);
			$config['upload_path'] = './images/siswa/';	
			$config['allowed_types'] = 'jpg|png|jpeg';	
			$config['max_size'] = '30000';	
			$config['file_name'] = $kode;
			$this->upload->initialize($config);
			if(!$this->upload->do_upload($value)){
				return array(false, '');
			}else{
				$fn = $this->upload->data();
				$nama = $fn['file_name'];
				return array(true, $nama);
			}
		}

	public function upload_image_admin($value)
		{
			$kode = round(microtime(true) * 1000);
			$config['upload_path'] = './images/admin/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size'] = 30000;
			$config['file_name'] = $kode;
			$this->upload->initialize($config);
			if (!$this->upload->do_upload($value)) {
				return array(false, '');
			} else {
				$fn = $this->upload->data();
				$nama = $fn['file_name'];
				return array(true, $nama);
			}
		}
	
	
	public function siswa()
		{
			$data['siswa'] = $this->m_model->get_data('siswa')->result();
			$this->load->view('admin/siswa', $data);
		}
	
	public function tambah_siswa()
		{
			$data['kelas'] = $this->m_model->get_data('kelas')->result();
			$this->load->view('admin/tambah_siswa',$data);
		}

		
	public function aksi_tambah_siswa()
		{
			$foto = $this->upload_image_siswa('foto');
			if ($foto[0] == false) {
				$data = [
					'foto' => 'User.png',
					'nama_siswa' => $this->input->post('nama'),
					'nisn' => $this->input->post('nisn'),
					'gender' => $this->input->post('gender'),
					'id_kelas' => $this->input->post('id_kelas'),
				];
				$this->m_model->tambah_data('siswa', $data);
				redirect(base_url('admin/siswa'));
			} else {
				$data = [
					'foto' => $foto[1],
					'nama_siswa' => $this->input->post('nama'),
					'nisn' => $this->input->post('nisn'),
					'gender' => $this->input->post('gender'),
					'id_kelas' => $this->input->post('id_kelas'),
				];
		
				$this->m_model->tambah_data('siswa', $data);
				redirect(base_url('admin/siswa'));
			}
			
		}

	public function hapus_siswa($id)
		{
			$siswa = $this->m_model->get_by_id('siswa', 'id_siswa', $id)->row();
			if($siswa){
				if($siswa->foto !== 'User.png'){
					$file_path = './images/siswa/' . $siswa->foto;

					if(file_exists($file_path)){
						if(unlink($file_path)){
							//hapus file berhasil menggunakan model delete
							$this->m_model->delete('siswa', 'id_siswa',$id);
							redirect(base_url('admin/siswa'));
						}else{
							//gagal menghapus file
							echo "gagal menghapus file.";
						}
					}else{
						//file tidak di temukan
						echo "File Tidak Di Temukan"; 
					}
				}else{
					//Tanpa Hapus File User.png
					$this->m_model->delete('siswa', 'id_siswa', $id);
					redirect(base_url('admin/siswa'));
				}
			}else{
				//Siswa Tidak Di Temukan
				echo "Siswa Tidak Di Temukan";
			}
		}

	public function ubah_siswa($id)
		{
		  $data['siswa'] = $this->m_model->get_by_id('siswa', 'id_siswa', $id)->result();
		  $data['kelas'] = $this->m_model->get_data('kelas')->result();
		  $this->load->view('admin/ubah_siswa', $data);
		}

	public function aksi_ubah_siswa()
		{
			$data = array (
				'nama_siswa' => $this->input->post('nama'),
				'nisn' => $this->input->post('nisn'),
				'gender' => $this->input->post('gender'),
				'id_kelas' => $this->input->post('id_kelas'),
			);
			$eksekusi=$this->m_model->ubah_data
			('siswa', $data, array('id_siswa'=>$this->input->post('id_siswa')));
			if($eksekusi)
			{
				redirect(base_url('admin/siswa'));
			}
			else
			{
				redirect(base_url('admin/ubah_siswa/'.$this->input->post('id_siswa')));
			}
		}

	public function akun()
		{
			$data['user']=$this->m_model->get_by_id('admin','id',$this->session->userdata('id'))->result();
			$this->load->view('admin/akun',$data);
		}

	public function aksi_ubah_akun()
		{
			$foto = $this->upload_image_admin('foto');
			if ($foto[0] == false) {
				$password_baru = $this->input->post('password_baru');
				$konfirmasi_password = $this->input->post('konfirmasi_password');
				$email = $this->input->post('email');
				$username = $this->input->post('username');
				$data = [
					'foto' => 'User.png',
					'email' => $email,
					'username' => $username,
				];
				if (!empty($password_baru)) {
					if ($password_baru === $konfirmasi_password) {
						$data['password'] = md5($password_baru);
					} else {
						$this->session->set_flashdata('message', 'Password baru dan Konfirmasi password harus sama');
						redirect(base_url('admin/akun'));
					}
				}
				$this->session->set_userdata($data);
				$update_result = $this->m_model->update('admin', $data, array('id' => $this->session->userdata('id')));
	
				if ($update_result) {
					redirect(base_url('admin/akun'));
				} else {
					redirect(base_url('admin/akun'));
				}
			} else {
				$password_baru = $this->input->post('password_baru');
				$konfirmasi_password = $this->input->post('konfirmasi_password');
				$email = $this->input->post('email');
				$username = $this->input->post('username');
				$data = [
					 'foto' => $foto[1],
					'email' => $email,
					'username' => $username,
				];
				if (!empty($password_baru)) {
					if ($password_baru === $konfirmasi_password) {
						$data['password'] = md5($password_baru);
					} else {
						$this->session->set_flashdata('message', 'Password baru dan Konfirmasi password harus sama');
						redirect(base_url('admin/akun'));
					}
				}
				$this->session->set_userdata($data);
				$update_result = $this->m_model->update('admin', $data, array('id' => $this->session->userdata('id')));
	
				if ($update_result) {
					redirect(base_url('admin/akun'));
				} else {
					redirect(base_url('admin/akun'));
				}
			}
		}

	}
