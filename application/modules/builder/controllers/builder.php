<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Builder extends MY_Controller {

	
	public function index($err = '', $msg = '')
	{
		$data['err'] = $err;
		$data['msg'] = $msg;
		$this->load->view('index');
	}

	function product_list($err = '', $msg = '')
	{
		$data['err'] = $err;
		$data['msg'] = $msg;
		$this->load->view('product-list', $data);
	}

	function booking($err = '', $msg = '')
	{
		$data['err'] = $err;
		$data['msg'] = $msg;
		$this->load->view('booking', $data);
	}
	function booking_history($err = '', $msg = '')
	{
		$data['err'] = $err;
		$data['msg'] = $msg;
		$this->load->view('booking-history', $data);
	}

	function jsaform($err = '', $msg = '')
	{
		$data['err'] = $err;
		$data['msg'] = $msg;
		$this->load->view('jsaform', $data);
	}

	

	public function orderhistory($err = '', $msg = '')
	{
		$data['err'] = $err;
		$data['msg'] = $msg;
		$this->load->view('order-history');
	}

	
}
