<?php
class Home extends MY_Controller
{
    function _construct()
    {
        parent::_construct();
    }
    public function index()
    {
        $data['title_name'] = "Welcome to Home";
        $data['view_file'] = 'home_v';
        $data['module'] = 'Home';
        $this->load->module('Template');
        $this->load->view('Template/public_bootstrap', $data);
        $this->load->view('Template/navbar_v');
    }
 
    function about()
    {
        $data['title_name'] = "About";
        $data['view_file'] = 'about';
        $data['module'] = 'home';
        echo Modules::run('template/public_bootstrap', $data);
    }
}
