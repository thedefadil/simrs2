<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_dokter_model extends CI_Model
{

    public $table = 'm_dokter';
    public $id = 'KDDOKTER';
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
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('KDDOKTER', $q);
	$this->db->or_like('KDPOLY', $q);
	$this->db->or_like('NAMADOKTER', $q);
	$this->db->or_like('KDPROFESI', $q);
	$this->db->or_like('NAMAPROFESI', $q);
	$this->db->or_like('st_aktif', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('KDDOKTER', $q);
	$this->db->or_like('KDPOLY', $q);
	$this->db->or_like('NAMADOKTER', $q);
	$this->db->or_like('KDPROFESI', $q);
	$this->db->or_like('NAMAPROFESI', $q);
	$this->db->or_like('st_aktif', $q);
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

/* End of file M_dokter_model.php */
/* Location: ./application/models/M_dokter_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-06-27 08:46:29 */
/* http://harviacode.com */