<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_mod extends CI_Model {

	function getDataList() {
		$this->db->select('*');
		$this->db->from('items');
		return $this->db->get()->result_array();
	}

	function checkGroup($group, $kompetisi) {
		$this->db->select('*');
		$this->db->from('bookmarks a');
		$this->db->join('items b', 'b.id = a.item_id');
		$this->db->where('a.group', $group);
		$this->db->where('b.kompetisi', $kompetisi);
		$this->db->order_by('a.sort', 'ASC');
		return $this->db->get()->result_array();
	}

	function getGroup($kompetisi) {
		$this->db->select('*');
		$this->db->from('bookmarks a');
		$this->db->join('items b', 'b.id = a.item_id');
		$this->db->join('group c', 'a.group = c.group_id');
		$this->db->where('b.kompetisi', $kompetisi);
		$this->db->order_by('b.id', 'ASC');
		return $this->db->get()->result_array();
	}

	function listGroup() {
		$this->db->select('*');
		$this->db->from('group');
		return $this->db->get()->result_array();
	}

	function listSort() {
		$this->db->select('*');
		$this->db->from('sort');
		return $this->db->get()->result_array();
	}

	function dragItem($id, $group, $item) {
		$this->db->where('id', $id);
		$data = array('group' => $group,'item_id' => $item);
		$this->db->update('bookmarks', $data); 
	} 

	function updateGroup($id, $group, $item, $sort_id) {
		$this->db->where('id', $id);
		$data = array('group' => $group,'item_id' => $item, 'sort' => $sort_id);
		$this->db->update('bookmarks', $data); 
	}
}