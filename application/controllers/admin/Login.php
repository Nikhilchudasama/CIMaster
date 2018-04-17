<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends AdminController {

    public function __construct() {

        parent::__construct();
    }

    public function index() {
        $data['pageTitle'] = "Login";
        $data['script'] = "Login";
        if ($this->input->post()) {
            $response = array();
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if ($this->form_validation->run() != FALSE) {
                $email = $this->input->post('email');
                $password = md5($this->input->post('password'));
                $conditions['conditions'] = array('email' => $email);
                $conditions['or_where'] = array('mobileno' => $email);
                $result = $this->CommonModel->selectSingleRow('mc_users', $conditions);
                if (count($result) <= 0) {
                    $response['message'] = "Incorrect email Address or mobileno!";
                    $response['error'] = 1;
                } else if ($result['password'] == $password) {
                    if ($result['status'] == 1) {
                        $response['message'] = 'Your Account Is Inactive';
                        $response['error'] = 1;
                    } else {
                        $userRecords = $result;
                        $this->session->set_userdata($userRecords);
                        $this->session->set_userdata("is_admin", "true");
                        if (isset($redirect_url) && $redirect_url != "") {
                            redirect($redirect_url);
                        } else {
                            $response['message'] = 'Login Success';
                            $response['error'] = 0;
                        }
                    }
                }else{
                    $response['message'] = 'Incorrect Details Entered!';
                    $response['error'] = 1;
                }
                echo json_encode($response);
                exit;
            } else {
                $errors = validation_errors();
                echo json_encode($errors);
                exit;
            }
        } else {
            $this->load->view($this->folder . '/login', $data);
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', ("You are logout successfully"));
        redirect($this->adminURL.'Login');
    }

}
