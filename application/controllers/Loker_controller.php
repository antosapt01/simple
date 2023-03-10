<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loker_controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('loker_model');
		$this->load->model('status_model');
		$this->load->model('profesi_model');
		$this->load->model('pendidikan_model');
		$this->load->model('auth_model');
		$this->load->helper('date');
	}
	public function index()
	{
		$data["lowongans"] = $this->loker_model->getData();
		$data["statuses"] = $this->status_model->getData();
		$data["pendidikans"] = $this->pendidikan_model->getData();
		$data["profesis"] = $this->profesi_model->getData();
		$this->load->view('homepage', $data);
	}
	public function detail($id)
	{
		$data["lowongans"] = $this->loker_model->getDataWhere($id);
		$this->load->view('detail', $data);
	}
	public function add_advertise()
	{
		$this->load->view('advertise');
	}
	public function auth_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data = $this->auth_model->login($email, $password);
		var_dump($data);
	}
	public function form_advertise()
	{
		$this->load->view('form_advertise');
	}
	public function form_advertise_second()
	{
		$this->load->view('form_advertise_second');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function policy()
	{
		$this->load->view('policy');
	}
	public function help()
	{
		$this->load->view('help');
	}
	public function cek()
	{
		$this->load->view('testcoruesol');
	}
}
