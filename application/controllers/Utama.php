<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('utama');
	}

	public function pelangi()
	{
		$this->load->view('pelangi');
	}

	public function balonku()
	{
		$this->load->view('balonku');
	}

	public function kereta()
	{
		$this->load->view('kereta');
	}

	public function cicak()
	{
		$this->load->view('cicak');
	}

	public function kebunku()
	{
		$this->load->view('kebunku');
	}
}
