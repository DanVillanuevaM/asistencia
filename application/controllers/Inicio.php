<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {


	public function index()
	{

		$data['menu'] = json_decode (MENU_ESTUDIANTE);

		$this->load->view('header_view');
		$this->load->view('side_menu_view', $data);
		$this->load->view('inicio_view');
		$this->load->view('footer_view');
	}
}