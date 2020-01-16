<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends API_Controller{
    function __construct()
    {    
        parent::__construct();
        $this->load->model('employees_model');
    }
    function insert_get(){
        $employeeNumber = $this->get('employeeNumber');
        $lastName = $this->get('lastName');
        $firstName = $this->get('firstName');
        $extension = $this->get('extension');
        $email = $this->get('email');
        $officeCode = $this->get('officeCode');
        $reportsTo = $this->get('reportsTo');
        $jobTitle = $this->get('jobTitle');
        $result = $this->employees_model->insert($employeeNumber,$lastName,$firstName,$extension,$email,$officeCode,$reportsTo,$jobTitle);
        if ($result != null)
            {
                $this->response([
                    'status' => true,
                    'response' => $result
                ], REST_Controller::HTTP_OK);
		        $this->load->view('welcome_message');
            }else{
            //error
                $this->response([
                    'status' => false,
                    'message' => ''
                ], REST_Controller::HTTP_CONFLICT);
            }
    }
    function get_all_get(){
        $keyword = $this->get('keyword');
        $result = $this->courses_model->get_all($keyword);
        if ($result != null)
            {
                $this->response([
                    'status' => true,
                    'response' => $result
                ], REST_Controller::HTTP_OK); 
            }else{
            //error
                $this->response([
                    'status' => false,
                    'message' => ''
                ], REST_Controller::HTTP_CONFLICT);
            }
    }
    
}