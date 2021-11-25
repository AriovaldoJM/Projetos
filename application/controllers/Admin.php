<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();

		if(!$this->session->has_userdata('id')){
			redirect(base_url('login'));
		}	
	}	
	public function index()
	{	
		$data = array(
			'page' => 'home',
			'title' => 'Home',
		);
		$this->load->view('admin', $data);
	}
	public function tabela()
	{	
		$data = array(
			'page' => "tabela",
			'title' => 'Tabela',
		);

		$this->load->view('admin', $data);
	}
	
}