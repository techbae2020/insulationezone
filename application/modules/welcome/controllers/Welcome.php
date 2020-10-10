<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	
	public function index()
	{
		$this->load->view('index');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('register');
	}
	public function products(){
		$this->load->view('products');
	}
	public function brands(){
		$this->load->view('brand');
	}
	public function booking(){
		$this->load->view('booking');
	}

	public function terms_of_uses(){
		$this->load->view('terms-of-uses');
	}

	public function faq(){
		$this->load->view('faq');
	}
	public function about()
	{
		$this->load->view('about-us');
	}
}
