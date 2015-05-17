<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}
	
		public function final_project_tambah()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/finalproject');
		$this->load->view('admin/footer');
	}
		public function final_project_edit()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/finalproject_edit');
		$this->load->view('admin/footer');
	}
		public function final_project_hapus()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/finalproject_hapus');
		$this->load->view('admin/footer');
	}
	public function tugas_akhir()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/tugasakhir');
		$this->load->view('admin/footer');
	}
	public function tugas_akhir_edit()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/tugasakhir_edit');
		$this->load->view('admin/footer');
	}
	public function tugas_akhir_hapus()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/tugasakhir_hapus');
		$this->load->view('admin/footer');
	}
	public function karya()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/karya');
		$this->load->view('admin/footer');
	}
	public function karya_edit()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/karya_edit');
		$this->load->view('admin/footer');
	}
	public function karya_hapus()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/karya_hapus');
		$this->load->view('admin/footer');
	}
}
