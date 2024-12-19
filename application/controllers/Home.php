<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		// $this->load->view('home');

		$data_design = $this->admin_design->vars();

		$this->parameters['head_title'] = 'PIMHR';

		$this->parameters['path_template_front'] = $data_design['path_template_front'];
		
		$this->parser->parse('home', $this->parameters);

	}

	public function index1() {
		redirect('admin/index1');
	}

}
