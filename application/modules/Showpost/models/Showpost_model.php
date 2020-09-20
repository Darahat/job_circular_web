<?php
class Showpost_model extends MY_Model
{

    function _construct()
    {
        parent::_construct();
    }
    public function get_posts()
    {
        global $db;
        $this->load->database();
        $this->load->dbutil();

        // check connection details
        // if (!$this->dbutil->database_exists('job_circular')) {
        //     echo 'Not connected to a database, or database not exists';
        // } else {
        //     echo 'connected';
        // }
        $query = $this->db->query("SELECT * from post ");

        return $query->result();
    }
}
