<?php 
class Phonebook extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this ->load->model('mdlcontacts');
	}
	public function index()
	{
		$d['contacts'] = $this->mdl_contacts->getallcontact
		$this ->load->view ("v_dashboard", $d);

	}public function aboutme()
	{
		$this ->load->view ("aboutME");

	}public function contacts (){
		$this ->Load->view ("contactno");
	
	}public function addcontacts (){
		$this ->Load->view ("addcontact");
	
	}public function  savecontact(){
		$data = array(
			"fullname" => $_POST ['fullname']
			"contactno" => $_POST ['contactno']
		);
		$this ->mdlcontacts->addnewcontact ("contactno");
		redirect(base_url());
	}
?>