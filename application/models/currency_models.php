<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Currency_models extends CI_Model {

    function get_currency()
    {
        $query = $this->db->get('currency');
        return $query->result_array();
    }

    function add_currency($data)
    {
        $this->db->insert('currency',$data);
    }
}
