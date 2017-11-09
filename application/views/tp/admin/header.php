<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin - Home</title>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style2.css')?>" />
</head>

<body>
<div id="header"></div>
<div id="statusbar">
<div class="welcome-text">Welcome <?php
    if($name = $this->session->userdata('adminname'))
    {
    echo "<span>" .$name. "</span>";
    }
    else
    {
        echo "<span>Guest</span>";
    }
    ?></div>
<div class="drop">
<ul class="drop_menu">
<li><a href="<?= base_url('admin/home'); ?>">Home</a></li>
<li><a href='#'>Add</a>
    <ul>
        <!--<li><a href='frmAddCountry.php'>Country</a></li>
        <li><a href='frmAddState.php'>State</a></li>
        <li><a href='frmAddCity.php'>City</a></li>
        <li><a href='frmAddExperience.php'>Experience</a></li>
        <li><a href='frmAddFunctionalArea.php'>Functional Area</a></li>-->
        <li><a href="<?= base_url('admin/add_job');?>">Job Type</a></li>
        <li><a href="<?= base_url('admin/add_qulification');?>">Qualification</a></li>
        <li><a href="<?= base_url('admin/add_skill');?>">Skills</a></li>
        <li><a href="<?= base_url('admin/add_work_field')?>">Work Fields</a></li>
    </ul>
</li>
<li><a href='#'>Student Report</a>
    <ul>
    <li><a href="<?= base_url('admin/register_student');?>">Registered Student</a></li>
    <li><a href="<?= base_url('admin/applied_jobs')?>">Applied Jobs</a></li>
    </ul>
</li>
<li><a href='#'>Recruiter Report</a>
    <ul>
    <li><a href="<?= base_url('admin/register_recruiter'); ?>">Registered Recruiter</a></li>
    <li><a href="<?= base_url('admin/offered_jobs')?>">Offered Jobs</a></li>
    </ul>
</li>
<li><a href="<?= base_url('admin/logout')?>">Logout</a></li>
</ul>
</div>
</div>
</body>
</html>