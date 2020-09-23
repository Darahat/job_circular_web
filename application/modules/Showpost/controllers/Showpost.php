<?php
class Showpost extends MY_Controller
{
    function _construct()
    {
        parent::_construct();
    }
    public function index()
    {
        $this->load->model("Showpost_model");
        $result = $this->Showpost_model->get_posts();
        // echo "<pre>";
        // print_r($result);

        $data['title_name'] = "Post Table";
        $data['view_file'] = 'showpost_v';
        $data['module'] = 'Showpost';
        $data['result'] = $result;
        $this->load->module('Template');
        $this->load->view('Template/public_bootstrap', $data);
    }
    public function get_all_post()
    {
        // echo"hello michky";
        $this->load->model("Showpost_model");
        $result = $this->Showpost_model->get_posts();
        $json_data =json_encode($result);
        echo "$json_data";
        return  $json_data; 
    }
}
