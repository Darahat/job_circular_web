<?php
class Template extends MY_Controller
{
    function _construct()
    {
        parent:: _construct();
    }
    public function navbar(){
        $this->load->view("navbar_v");
    }
}
?>