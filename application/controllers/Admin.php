<?php
/**
*
*/
class Admin extends MY_Controller
{

    public function admin_login()
    {
        # code...
        $this->load->library('form_validation');
        if ($this->form_validation->run('login_rules')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('adminmodel');
            $result = $this->adminmodel->admin_login($username,$password);
            if ($result) {
                # code...
                $this->session->set_userdata('adminname',$result->username);
                $this->load->view('tp/admin/admin_panel');
                // $this->load->view('tp/admin/header');
            }else {
                $this->session->set_flashdata('login_failed','invalid username/password');
                redirect('home/admin_login');
            }
        }else {
            // return redirect('home/admin_login');
            $this->load->view('tp/admin_login');
        }
    }

    public function home()
    {
        # code...
        $this->load->view('tp/admin/admin_panel');
    }

    public function add_job()
    {
        # code...
        $this->load->view('tp/admin/frm_add_job_type');
    }

    public function add_qulification()
    {
        # code...
        $this->load->view('tp/admin/frm_add_qulification');
    }

    public function add_skill()
    {
        $this->load->view('tp/admin/frm_add_skill');
    }

    public function add_work_field()
    {
        # code...
        $this->load->view('tp/admin/frm_add_work_field');
    }

    public function register_student()
    {
        # code...
        $this->load->model('adminmodel');
        $register_student = $this->adminmodel->register_student();
        $this->load->view('tp/admin/view_reports/jobseeker/frm_view_register_student',['register_student'=>$register_student]);
    }

    public function applied_jobs()
    {
        # code...
        $this->load->model('adminmodel');
        $applied_student = $this->adminmodel->applied_jobs();
        $this->load->view('tp/admin/view_reports/jobseeker/frm_jobseeker_response_recruiter',['applied_student'=>$applied_student]);
    }

    public function register_recruiter()
    {
        # code...
        $this->load->model('adminmodel');
        $register_recruiter = $this->adminmodel->register_recruiter();
        $this->load->view('tp/admin/view_reports/recruiter/frm_view_register_recruiter',['register_recruiter'=>$register_recruiter]);
    }

    public function offered_jobs()
    {
        # code...
        $this->load->model('adminmodel');
        $offered_jobs = $this->adminmodel->offered_jobs();
        $this->load->view('tp/admin/view_reports/recruiter/frm_recruiter_response_jobseeker',['offered_jobs'=>$offered_jobs]);
    }

    public function logout()
    {
        # code...
        $this->session->unset_userdata('adminname');
        $this->session->set_flashdata('logout','Logout successfully');
        return redirect('home/login');
    }
}
?>