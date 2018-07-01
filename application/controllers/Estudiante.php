<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function index()
	{

		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('flexigrid');
			$crud->set_table('estudiante');
			$crud->set_subject('Estudiante');

			$output = $crud->render();

			$this->_views_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		
	}

	public function _views_output($output = null)
	{
		$data['menu'] = json_decode (MENU_SECRETARIA);
		// $this->load->view('example.php',(array)$output);
		$this->load->view('header_view');
		$this->load->view('side_menu_view', $data);
		$this->load->view('estudiantes_view', (array)$output);
		$this->load->view('footer_view');
	}
}