<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perkalian extends CI_Controller {
	public function index() {
		$this->load->view('perkalian');
	}

	public function hasilKali() {
		$hasil['hasilnya'] = $_POST['num1']*$_POST['num2'];
		$this->load->view('hasilkali', $hasil);
	}
}
