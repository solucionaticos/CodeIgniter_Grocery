<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page404 extends MY_Controller {

	public function index()
	{
		$data_design = $this->admin_design->vars();

		$this->parameters['head_title'] = 'PIMHR - Error 404';

		$this->parameters['path_template_front'] = $data_design['path_template_front'];
		
		$this->parser->parse('page404', $this->parameters);

	}

}	