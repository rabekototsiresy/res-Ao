<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudController extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');   
    }
	public function index()
	{
        $data['result']=$this->Crud_model->getAllData();
		$this->load->view('crudView',$data);
	
	}
    public function create()
    {
        $this->Crud_model->createData();
        redirect('CrudController');
    }
}
