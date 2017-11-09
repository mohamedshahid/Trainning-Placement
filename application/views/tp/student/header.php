<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student - Home</title>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style2.css');?>" />
</head>

<body>
<div id="header"></div>
<div id="statusbar">
<div class="welcome-text">Welcome <?php
    if($name = $this->session->userdata('studentname'))
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
<li><a href="<?= base_url('student/home');?>">Home</a></li>
<li><a href="<?= base_url('student/update_profile');?>">Update Profile</a></li>
<li><a href="<?= base_url('student/list_profile_setting');?>">Profile Settings</a></li>
<li><a href="<?= base_url('student/list_academic_profile')?>">Academic Profile</a></li>
<li><a href="<?= base_url('student/view_job');?>">Search Job</a></li>
<li><a href="<?= base_url('student/recruiter_response_jobseeker')?>">Response</a></li>
<li><a href="<?= base_url('student/student_logout')?>">Logout</a></li>
</ul>
</div>
<!--
<div class="page-name">Page name</div>-->
</div>
</body>
</html>