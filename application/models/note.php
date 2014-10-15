<?php 

class Note extends CI_Model {

	public function add_note($post_it)
	{
		$query = "INSERT INTO notes (title, description, created_at, updated_at)
				  VALUES (?, ?, NOW(), NOW());";
		$value = array($post_it['new_title'], $post_it['note_text']);
		return $this->db->query($query, $value);
	}

	public function get_all()
	{
		$query = "SELECT * FROM notes;";
		return $this->db->query($query)->result_array();
	}

	public function delete($id)
	{
		$query = "DELETE FROM notes
				  WHERE id = ?;";
		$value = array($id);
		return $this->db->query($query, $value);
	}

	public function edit($id, $description)
	{
		$query = "UPDATE notes
				  SET description = ?
				  WHERE id = ?;";
		$values = array($description, $id);
		return $this->db->query($query, $values);
	}
}