<?php
class Postcreate extends MY_Controller
{
    function _construct()
    {
        parent::_construct();

        $this->load->database();
    }
    public function index()
    {
        $data['title_name'] = "Create A Post";

        $data['view_file'] = 'postcreate_v';
        $data['module'] = 'Postcreate';
        $this->load->module('Template');
        $this->load->view('Template/public_bootstrap', $data);
    }
    public function savedata()
    {
        $this->load->model('Postcreate_model');
        if ($this->input->post('save')) {
            $invoice_date = strtotime($this->input->post('deadline'));
            $date = date("Y-m-d", $invoice_date);

            $data['job_title'] = $this->input->post('job_title');
            $data['company_name'] = $this->input->post('company_name');
            $data['deadline'] = $date;
            $data['salary_range'] = $this->input->post('salary_range');
            $data['job_type'] = $this->input->post('job_type');
            $data['job_sub_type'] = $this->input->post('job_subtype');
            $data['job_description'] = $this->input->post('job_description');
            $post = $this->Postcreate_model->saverecords($data);
            if ($post > 0) {
                echo "Records Saved Successfully";
            } else {
                echo "Insert error !";
            }
        }
    }
}
