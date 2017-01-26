<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Course');
		$this->load->helper('url');
		$this->load->database();
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		$view_data['courses'] = $this->Course->get_all_courses();
		$this->load->view('courseView', $view_data);
	}

	public function add()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('Course_Name', 'Course Name', 'required|min_length[15]');

		if($this->form_validation->run() == TRUE)
		{
			$course = array(
							'Course_Name' => $this->input->post('Course_Name'),
							'Description' => $this->input->post('Description')
						);

			$this->Course->add_course($course);
			$this->session->set_flashdata('message', 'Course is added successfully');
		}

		else
		{
			$this->session->set_flashdata('message', validation_errors());
		}

		redirect(base_url('Courses/'));
	}

	public function destroy($course_id=NULL)
	{
		$view_data['course'] = $this->Course->get_specific_course($course_id);
		$this->load->view('delete', $view_data);

		$course_id = $this->input->post('course_id');
		if($this->input->post('action') == 'cancel')
		{
			$this->session->set_flashdata('message', 'Course is retained.');
			redirect(base_url('courses/'));
		}

		if($this->input->post('action') == 'delete')
		{
			$this->Course->remove_course($course_id);
			$this->session->set_flashdata('message', 'Course is deleted.');
			redirect(base_url('courses/'));
		}
	}

}
