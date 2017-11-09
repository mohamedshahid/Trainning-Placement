<?php include("header.php");?>

<div id="section">
<div id="innersection">
<h2 style="text-align:center">Welcome to Student Panel - <label style="color:#1E90FF"><?php if ($name=$this->session->userdata('studentname')) {
    # code...
    echo "$name";
}else{
    echo "Guest";
}
?>
</label></h2>
<center><h3 style="color:#A52A2A">:: Quick Links ::</h3>
<h3><a href="<?= base_url('student/update_profile');?>">1. Update your contact details</a></h3>
<h3><a href="<?= base_url('student/list_academic_profile')?>">2. Update your academic profile</a></h3>
<h3><a href="<?= base_url('student/upload_form')?>">3. Upload your resume</a></h3>
<h3><a href="<?= base_url('student/view_job');?>">4. Search for new job</a></h3>
<h3><a href="<?= base_url('student/recruiter_response_jobseeker')?>">5. View jobs offered to you</a></h3></center>
</div>
</div>

<?php include("footer.php"); ?>