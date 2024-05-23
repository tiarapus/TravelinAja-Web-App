<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Travel extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_travel');
	}
	
	public function index() 
	{
		$data['trl'] = $this->model_travel->get_trl();
		$data['c_trl']  = $this->model_travel->count_travel();
		$this->load->view('index',$data);
	}
	public function landing_page($id = FALSE) 
	{
		if ($id === FALSE){
			$data['trl'] = $this->model_travel->get_trl();
			$data['c_trl']  = $this->model_travel->count_travel();
			$this->load->view('landing_page',$data);
		} else{
			$data['data']   = $this->model_travel->get_edit_data($id); 
			$this->load->view('landing_page',$data);
		}
		
	}
	
	public function simpan_data() 
	{
		$this->model_travel->simpan_data();
		$data['trl'] = $this->model_travel->get_trl();
		$data['c_trl']  = $this->model_travel->count_travel();
		$this->load->view('index',$data);
	}
	
	public function edit_data($id) 
	{
		$data['data']   = $this->model_travel->get_edit_data($id); 
		$data['trl']    = $this->model_travel->get_trl();
		$data['c_trl']  = $this->model_travel->count_travel();
		$this->load->view('edit',$data);
	}
	
	public function eksekusi_edit() 
	{
		$this->model_travel->eksekusi_edit(); 
	}
	
	public function hapus_data($id) 
	{
		$this->model_travel->hapus_data($id);
		$data['message'] = 'Data berhasil dihapus';
		// Load the view file that displays after the deletion operation
		$this->load->view('index', $data);
	}
	
}
?>