<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Events_model extends CI_Model
{

    public $table = 'tbl_events';
    public $id = 'id_events';
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
    
     // menghitun jumlah record dari sebuah tabel.
     function countAll()
    {
        return $this->db->get($this->table)->num_rows();
    }

    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_events', $q);
	$this->db->or_like('name_events', $q);
	$this->db->or_like('type_events', $q);
	$this->db->or_like('link_events', $q);
	$this->db->or_like('about_events', $q);
	$this->db->or_like('date_events', $q);
	$this->db->or_like('closed_events', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_events', $q);
	$this->db->or_like('name_events', $q);
	$this->db->or_like('type_events', $q);
	$this->db->or_like('link_events', $q);
	$this->db->or_like('about_events', $q);
	$this->db->or_like('date_events', $q);
	$this->db->or_like('closed_events', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    //get last data id event from insert event
     function getLastInserted() {
        $this->db->insert_id();

        /*$query ="SELECT id_events as maxID from tbl_events where id_events = LAST_INSERT_ID()";
        return $query;*/
    }

    // insert data events
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

/* End of file Events_model.php */
/* Location: ./application/models/Events_model.php */