<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Marriage extends AdminController {

    public function __construct() {

        parent::__construct();
    }
    
    public function index(){
        $this->checkSessionAdmin();
        $data['pageTitle'] = "Marriage Form";
        $data['script'] = "marriageform";
        $data['style'] = "marriageform";
        $this->adminView('marriageform/add',$data);
    }
}

