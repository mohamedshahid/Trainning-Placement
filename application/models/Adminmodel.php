<?php
/**
*
*/
class Adminmodel extends CI_Model
{

    public function admin_login($username,$password)
    {
        # code...
        $q = $this->db->from('tbl_adminlogin')
                        ->where('username',$username,'password',$password)
                        ->get();
        return $q->row();
    }

    public function register_student()
    {
        # code...
        $q = $this->db->from('tbl_jobseekeracademicdetails')
                        ->order_by('EnrollmentNo','ASC')
                        ->get();
        return $q->result();
    }

    public function applied_jobs()
    {
        # code...
        $q = $this->db->from('tbl_jobseekerresponsetorecruiter')
                        ->order_by('JobID','ASC')
                        ->get();
        return $q->result();
    }

    public function register_recruiter()
    {
        $q = $this->db->from('tbl_recruiterorganisationdetails')
                        ->order_by('username', 'ASC')
                        ->get();
        return $q->result();
    }

    public function offered_jobs()
    {
        # code...
        $q = $this->db->from('tbl_recruiterresponsetojobseeker')
                        ->order_by('JobID','ASC')
                        ->get();
        return $q->result();
    }
}
 ?>