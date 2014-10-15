<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Note');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function create()
	{
		$post_it = $this->input->post();
		$this->Note->add_note($post_it);
		redirect('/notes/alt_view');
	}

	public function delete($id)
	{
		$this->Note->delete($id);
		redirect('/notes/alt_view');
	}

	public function alt_view()
	{
		$all_posts = $this->Note->get_all();
		$data = array('postings' => $all_posts);
		$this->load->view('workspace_partial', $data);
	}

	public function edit($id)
	{
		$post = $this->input->post();
		$this->Note->edit($id, $post['note_text']);
		redirect('/notes/alt_view');
	}
}

/* End of file notes.php */
/* Location: ./application/controllers/notes.php */