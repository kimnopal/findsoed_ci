<?php
class Pages extends CI_Controller
{
	public function view($page = 'home', $offset = 0)
	{
		// Pagination Config	
		$config['base_url'] = base_url() . 'posts/index/';
		$config['total_rows'] = $this->db->count_all('posts');

		$data['posts'] = $this->post_model->get_posts();

		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			show_404();
		}

		$data['title'] = "Beranda";

		$this->load->view('templates/header');
		$this->load->view('pages/' . $page, $data);
		$this->load->view('templates/footer');
	}
}
