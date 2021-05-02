<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notes extends CI_Controller {
	public function index()
	{
		$this->load->model('Note');
		$data['notes'] = $this->Note->get_all_notes();
		$this->load->view('notes', $data);
	}
	public function add_note()
	{
		$this->load->model('Note');
		if(strlen($this->input->post('title'))>0)
		{
			$this->Note->add_note($this->input->post());
		}
		$data['notes'] = $this->Note->get_all_notes();
		$this->load->view('partials/notes.php', $data);
	}

	public function delete_note($id)
	{
		$this->load->model('Note');
		$this->Note->delete_note($id);
		$data['notes'] = $this->Note->get_all_notes();
		$this->load->view('partials/notes.php', $data);
	}
	public function update_description($id)
	{
		$this->load->model('Note');
		$this->Note->update_description($this->input->post(), $id);
		$data['notes'] = $this->Note->get_all_notes();
		$this->load->view('partials/notes.php', $data);
	}
}
