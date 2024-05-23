<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_travel extends CI_Model {
		
		function __construct() 
		{
			parent :: __construct();
		}
		
		public function get_trl()
		{
			$data = $this->db->query("SELECT * FROM travel");
			return $data->result();
		}
		
		public function get_edit_data($id)
		{
			$data = $this->db->query("SELECT * FROM travel WHERE id='$id'");
			return $data->result();
			
		}
		
		public function count_travel()
		{
			$data = $this->db->query("SELECT * FROM travel");
			return $data->num_rows();
		}
		
		public function simpan_data()
		{
			$this->load->library('upload'); 

			$config['upload_path']   = './uploads/';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size']      = '2048000';
			// $config['max_width'] = 1920; 
			// $config['max_height'] = 1080;
			$photo = $this->input->post('photo');
			$original_name = $_FILES['photo']['name'];
			$cleaned_name = preg_replace("/[^A-Za-z0-9\_\-\.]/", '', $original_name);
			$config['file_name'] = $cleaned_name;

			$this->upload->initialize($config);

			if (!$this->upload->do_upload('photo')) {
				$error = $this->upload->display_errors();
				echo $error; 
			} else {
				$data = $this->upload->data();
				$data = array(
					'id'          => "",
					'destinasi'        => $this->input->post('destinasi'),
					'jml_org'         => $this->input->post('jml_org'),
					'budget'     => $this->input->post('budget'),
					'deskripsi'     => $this->input->post('deskripsi'),
					'photo'       => $config['file_name'] 
				);

				$this->db->insert('travel', $data);
				// redirect('travel/index');
			}
		}


		
		public function eksekusi_edit()
		{
			$this->load->library('upload'); 

			$config['upload_path']   = './uploads/';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size']      = '2048000';
			// $config['max_width']     = 1920; 
			// $config['max_height']    = 1080;

			// Periksa apakah ada file yang diunggah
			if (!empty($_FILES['photo']['name'])) {
				$original_name = $_FILES['photo']['name'];
				$cleaned_name = preg_replace("/[^A-Za-z0-9\_\-\.]/", '', $original_name);
				$config['file_name'] = $cleaned_name;

				$this->upload->initialize($config);

				if (!$this->upload->do_upload('photo')) {
					// Handle upload failure
					$error = $this->upload->display_errors();
					echo $error; 
					return; // Stop execution
				}

				// Jika berhasil diunggah, ambil nama file yang diunggah
				$data = $this->upload->data();
				$photo = $data['file_name'];
			} else {
				// Jika tidak ada file yang diunggah, gunakan nama foto yang ada dalam formulir
				$photo = $this->input->post('photo');
			}

			// Dapatkan data dari formulir
			$id = $this->input->post('id');
			$data = array(
				'destinasi'    => $this->input->post('destinasi'),
				'jml_org'     => $this->input->post('jml_org'),
				'deskripsi' => $this->input->post('deskripsi'),
				'budget' => $this->input->post('budget'),
				'photo'   => $photo
			);
			
			// Perbarui data dalam database
			$this->db->where('id', $id); 
			$this->db->update('travel', $data); 
			
			redirect('travel/index');
		}
	
		
		public function hapus_data($id)
		{
			$this->db->query("DELETE FROM travel WHERE id='$id'");
			redirect();
		}
	}
?>	