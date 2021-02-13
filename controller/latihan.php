<?php
	public function index(){
	$data['warga']=$this->model_mutasi->get_mutasi();
	$this->load->view('home',$data);
}

public function insert(){

	$data = array(
		'NIK' => $this->input->post('NIK'),
		'Nama' => $this->input->post('Nama')
		
	);

	$this->model_mutasi->insert_data($data, 'mutasi');
	redirect('home');
}