<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

	public function index()
	{
		$data_design = $this->admin_design->vars();

		$this->parameters['head_title'] = 'PIMHR - Register';

		$this->parameters['path_template_front'] = $data_design['path_template_front'];
		
		$this->parser->parse('register', $this->parameters);

	}

}	