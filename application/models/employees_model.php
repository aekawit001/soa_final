<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class employees_model extends CI_Model {
    private $tbl_name = "employeses";

    function insert($employeeNumber,$lastName,$firstName,$extension,$email,$officeCode,$reportsTo,$jobTitle){
        $this->db->set('employeeNumber', $employeeNumber);
        $this->db->set('lastName', $lastName);
        $this->db->set('firstName', $firstName);
        $this->db->set('extension', $extension);
        $this->db->set('email', $email);
        $this->db->set('officeCode', $officeCode);
        $this->db->set('reportsTo',$reportsTo);
        $this->db->set('jobTitle',$jobTitle);
        $this->db->insert('employeses');
        $result = $this->db->get($this->tbl_name);
        return $result;
    }
    function get_all($keyword){
        $this->db->like('',$keyword);
        $result = $this->db->get($this->tbl_name);
        return $result->result();

    }
    

}