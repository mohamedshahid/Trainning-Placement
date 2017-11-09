<?php
/**
*
*/
class Student extends MY_Controller
{

    public function student_login()
    {
        # code...
        $this->load->library('form_validation');
        if ($this->form_validation->run('login_rules')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->load->model('studentmodel');
            $result = $this->studentmodel->student_login($username,$password);
            if ($result) {
                # code...
                $this->session->set_userdata('studentname',$result->JobSeekerID);
                return redirect('student/home');
                // $this->load->view('tp/admin/header');
            }else {
                $this->session->set_flashdata('login_failed','invalid username/password');
                redirect('home/admin_login');
            }
        }else {
            // return redirect('home/admin_login');
            $this->load->view('tp/student_login');
        }
    }

    public function home()
    {
        # code...
        $this->load->view('tp/student/student_panel');
    }

    public function update_profile()
    {
        $this->load->helper('form');
        $studentname = $this->session->userdata('studentname');
        $this->load->model('studentmodel');
        $student = $this->studentmodel->list_profile($studentname);
        $this->load->view('tp/student/frm_student_update_profile',['student'=>$student]);
    }

    public function edit_profile()
    {
        # code...
        $student =$this->input->post();
        $id = $this->session->userdata('studentname');
        unset($student['submit']);
        $this->load->model('studentmodel');
        if($this->studentmodel->update_profile($id,$student))
        {
            $this->session->set_flashdata('update','update successfully');
        }else {
            $this->session->set_flashdata('update','update unsuccessfully');
        }
        return redirect('student/update_profile');
    }

    public function list_profile_setting()
    {
        # code...
        $id = $this->session->userdata('studentname');
        $this->load->model('studentmodel');
        $q = $this->studentmodel->list_profile_setting($id);
        $this->load->helper('form');
        $this->load->view('tp/student/frm_student_profile_setting',['row'=>$q,'id'=>$id]);
    }

    public function update_profile_setting()
    {
        # code...
        $post = $this->input->post();
        print_r($post);
        // remain to complete
    }

    public function list_academic_profile()
    {
        # code...
        $this->load->helper('form');
        $id = $this->session->userdata('studentname');
        $this->load->model('studentmodel');
        $row = $this->studentmodel->list_academic_profile($id);
        $this->load->view('tp/student/frm_student_academic_profile',['row'=>$row]);
    }

    public function update_academic_profile()
    {
        # code...
        $student =$this->input->post();
        $id = $this->session->userdata('studentname');
        unset($student['submit']);
        $this->load->model('studentmodel');
        if($this->studentmodel->update_academic_profile($id,$student))
        {
            $this->session->set_flashdata('update','update successfully');
        }else {
            $this->session->set_flashdata('update','update unsuccessfully');
        }
        return redirect('student/list_academic_profile');
    }

    public function view_job()
    {
        # code...
        $this->load->view('tp/student/frm_student_search_job');
    }

    public function view_all_jobs()
    {
        # code...
        $this->load->model('studentmodel');
        $this->studentmodel->view_all_jobs();
        $this->load->view('tp/student/frm_view_all_jobs');
    }

    public function category_jobs()
    {
        # code...
        $this->load->helper('form');
        $this->load->model('studentmodel');
        $q = $this->studentmodel->view_job_category();
        $this->load->view('tp/student/frm_category_jobs',['rows'=>$q]);
    }

    public function search_job()
    {
        # code...
        $category = $this->input->post('search');
        $this->load->model('studentmodel');
        $q = $this->studentmodel->search_job($category);
        $this->load->view('tp/student/searched_job_by_category',['rows'=>$q,'search'=>$category]);
    }

    public function forget_password_link()
    {
        # code...
        $this->load->model('studentmodel');
        $q = $this->studentmodel->hint();
        $this->load->helper('form');
        $this->load->view('tp/student/frm_student_forget_password',['rows'=>$q]);
    }

    public function forget_password()
    {
        # code...
        $post = $this->input->post();
        unset($post['submit']);
        $this->load->model('studentmodel');
        $q = $this->studentmodel->forget_password($post);
        if ($q) {
            # code...
            echo "<h2>Your password is: ".$q->password.". You will be redirected in 5 seconds</h2>";
            // return redirect('home/student_login','refresh = 10');
            return header( "refresh:5,../home/student_login");
        }else {
            $this->session->set_flashdata('forget_password','invalid username/hint/answer');
            return redirect('student/forget_password_link');
        }
    }

    public function recruiter_response_jobseeker()
    {
        # code...
        $id = $this->session->userdata('studentname');
        $this->load->model('studentmodel');
        $q = $this->studentmodel->recruiter_response_jobseeker($id);
        $this->load->view('tp/student/frm_recruiter_response_jobseeker',['rows'=>$q]);
    }

        public function student_logout()
    {
        # code...
        $this->session->unset_userdata('studentname');
        $this->session->set_flashdata('logout','Logout successfully');
        return redirect('home/login');
    }

    public function upload_form()
    {
        # code...
        $id = $this->session->userdata('studentname');
        $this->load->helper('form');
        $this->load->model('studentmodel');
        $path = $this->studentmodel->check_path($id);
        $this->load->view('tp/student/upload_form',$path);

    }

    public function upload_cv()
    {
        # code...
        $id = $this->session->userdata('studentname');
        $config = [
            'upload_path'=>'./uploads',
            'allowed_types'=>'pdf|doc',
        ];
        $this->load->library('upload',$config);
        if($this->upload->do_upload('resume')) {
            $data = $this->upload->data();
            $resume_path = ['path'=>base_url("uploads/".$data['raw_name'].$data['file_ext'])];
            $this->load->model('studentmodel');
            if($this->studentmodel->upload_path($resume_path,$id)){
                $this->session->set_flashdata('update','resume uploaded');
                return redirect('student/upload_form');
            }
        }else {
            $upload_error = $this->upload->display_errors();
            $this->load->helper('form');
            $this->load->view('tp/student/upload_form',['upload_error'=>$upload_error]);
        }
    }
}
 ?>