<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Options_event_model extends CI_Model
{

    public $table = 'tbl_options_event';
    public $id = '';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
     function get_by_events($id)
    {
    	$query = "SELECT name_options FROM tbl_events JOIN tbl_options_event ON tbl_events.id_events = tbl_options_event.id_events
    	WHERE tbl_options_event.id_events =$id";
    	return $this->db->query($query);
    }

     // menghitun jumlah record dari sebuah tabel.
     function countAll()
    {
        return $this->db->get($this->table)->num_rows();
    }

    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('', $q);
	$this->db->or_like('id_options', $q);
	$this->db->or_like('id_events', $q);
	$this->db->or_like('name_options', $q);
	$this->db->or_like('img_options', $q);
	$this->db->or_like('count_options', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('', $q);
	$this->db->or_like('id_options', $q);
	$this->db->or_like('id_events', $q);
	$this->db->or_like('name_options', $q);
	$this->db->or_like('img_options', $q);
	$this->db->or_like('count_options', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }


}

/* End of file Options_event_model.php */
/* Location: ./application/models/Options_event_model.php */