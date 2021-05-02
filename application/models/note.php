<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Note extends CI_Model {
    public function get_all_notes()
    {
        $query = "SELECT * FROM notes";
        return $this->db->query($query)->result_array();
    }
    public function add_note($note)
    {
        $query = "INSERT INTO notes (title, created_at) VALUES (?, NOW())";
        $values = array('title' => $note['title']);
        return $this->db->query($query, $values);
    }
    public function delete_note($id)
    {
        $query = "DELETE FROM notes WHERE id= ?";
        return $this->db->query($query, $id);
    }
    public function update_description($note, $id)
    {
        $query = "UPDATE notes SET description = ?, updated_at = NOW() WHERE id = ?";
        $values = array('description' => $note['description'], 'id' => $id);
        return $this->db->query($query, $values);
    }
}