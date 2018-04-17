<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends AdminController {
    
    public function __construct() {

        parent::__construct();
    }
    
    public function index(){
        $this->checkSessionAdmin();
        $data['pageTitle'] = "Dashboard";
        $this->adminView('dashboard',$data);
    }
    
}