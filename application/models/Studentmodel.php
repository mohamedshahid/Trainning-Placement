<?php
/**
*
*/
class Studentmodel extends CI_Model
{
   public function student_login($username,$password)
    {
        # code...
        $q = $this->db->from('tbl_jobseekerregistration')
                        ->where('JobSeekerID',$username,'password',$password)
                        ->get();
        return $q->row();
    }

    public function list_profile($studentname)
    {
        # code...
        $q = $this->db->from('tbljobseekercontactdetails')
                        ->where('JobSeekerID',$studentname)
                        ->get();
        return $q->row();
    }

    public function update_profile($id,$student)
    {
        # code...
        return $this->db
                    ->where('JobSeekerID',$id)
                    ->update('tbljobseekercontactdetails',$student);
    }

    public function list_academic_profile($id)
    {
        # code...
        $q = $this->db
                    ->from('tbl_jobseekeracademicdetails')
                    ->where('JobSeekerID',$id)
                    ->get();
        return $q->row();
    }

    public function update_academic_profile($id,$student)
    {
        # code...
        return $this->db
                    ->where('JobSeekerID',$id)
                    ->update('tbl_jobseekeracademicdetails',$student);
    }

    public function list_profile_setting($id)
    {
        # code...
        $q = $this->db
                    ->from('tbl_jobseekerregistration')
                    ->where('JobSeekerID',$id)
                    ->get();
        return $q->row();
    }

    public function update_profile_setting()
    {
        # code...
        // remain to complete
    }


    public function view_all_jobs()
    {
        # code...
        $q = $this->db
                    ->from('tbl_jobopeningdetail')
                    ->order_by('JobID','ASC')
                    ->get();
        echo "<pre>";
        print_r($q->result());exit();
        return $q->result();
    }

    public function view_job_category()
    {
        # code...
        $q = $this->db
                    ->from('tbl_workfield')
                    ->get();
        return $q->result();
    }

    public function search_job($category)
    {
        # code...
        $q = $this->db
                    ->from('tbl_jobopeningdetail')
                    ->like('JobCategory',$category)
                    ->get();
        return $q;
    }

    public function hint()
    {
        # code...
        $q = $this->db
                    ->from('tbl_hint_question')
                    ->get();
        return $q->result();
    }

    public function forget_password($input)
    {
        # code...
        $q = $this->db->select('password')
                        ->from('tbl_jobseekerregistration')
                        ->where($input)
                        ->get();
        return $q->row();
    }

    public function recruiter_response_jobseeker($id)
    {
        # code...
        $q = $this->db
                    ->from('tbl_recruiterresponsetojobseeker')
                    ->where('JobSeekerName',$id)
                    ->get();
        return $q->result();
    }

    public function upload_path($resume_path,$id)
    {
        # code...
        return $this->db
                ->where('JobSeekerID',$id)
                ->update('tbl_jobseekerregistration',$resume_path);
    }

    public function check_path($id)
    {
        # code...
        $q = $this->db
                ->select('path')
                ->from('tbl_jobseekerregistration')
                ->where('JobSeekerID',$id)
                ->get();
        if ($q) {
            # code...
            return $q->row();
        }else{
            return FALSE;
        }
    }

}
 ?>