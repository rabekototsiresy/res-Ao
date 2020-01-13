<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model
{
   public function __construct()
   {
    $this->load->database();
   }
public function createData()
{
    $data = [
        'lastName'=>$this->input->post('lastName'),
        'firstName'=>$this->input->post('firstName'),
        'birthDate'=>$this->input->post('birthDate'),
        'contactNo'=>$this->input->post('contactNo'),
        'bio'=>$this->input->post('bio')
    ];
    $this->db->insert('tbl_name',$data);
}
public function getAllData()
{
    $query = $this->db->query('SELECT * FROM tbl_name');
    return $query->result();
}

}
