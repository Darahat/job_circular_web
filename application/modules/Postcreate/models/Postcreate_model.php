<?php
class Postcreate_model extends MY_Model
{
    // public 
    function _construct()
    {
        parent::_construct();
    }
    function saverecords($data)
    {
        global $db;
        $this->load->database();
        $this->load->dbutil();

        // check connection details
        if (!$this->dbutil->database_exists('job_circular')) {
            echo 'Not connected to a database, or database not exists';
        } else {
            echo 'connected';
        }
        $this->db->insert('post', $data);
        return $this->db->insert_id();
    }
}
