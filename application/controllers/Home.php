<?php
class Home extends MY_Controller
{
    public function index()
    {
        # code...
        $this->load->view('tp/home');
    }

    public function about_us()
    {
        # code...
        $this->load->view('tp/about_us');
    }

    public function login()
    {
        # code...
        $this->load->view('tp/login');
    }

    public function procedure()
    {
        # code...
        $this->load->view('tp/procedure');
    }

    public function our_recruiters()
    {
        # code...
        $this->load->view('tp/our_recruiters');
    }

    public function stats()
    {
        # code...
        $this->load->view('tp/stats');
    }

    public function contact_us()
    {
        $this->load->view('tp/contact_us');
    }

    public function admin_login()
    {
        if ($this->session->userdata('adminname')) {
            # code...
            redirect('admin/home');
        }
        $this->load->helper('form');
        $this->load->view('tp/admin_login');
    }

    public function student_login()
    {
        if ($this->session->userdata('studentname')) {
            # code...
            redirect('student/home');
        }
        $this->load->helper('form');
        $this->load->view('tp/student_login');
    }

    public function student_registration()
    {
        # code...
        $this->load->view('tp/frm_student_registration');
    }

    public function recruiter_login()
    {
        # code...
        $this->load->view('tp/recruiter_login');
    }
}
 ?>
