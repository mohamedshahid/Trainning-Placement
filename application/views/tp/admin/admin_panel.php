<?php include("header.php");?>


<div id="section">
<div id="innersection">
<h2 style="text-align:center">Welcome to Administration Panel - <label style="color:#9400D3"><?php echo $_SESSION['username']; ?></label></h2>
<center><h3 style="color:#A52A2A">:: Quick Links ::</h3>
<h3><a href="<?= base_url('admin/register_student');?>">1. View All Registered Students</a></h3>
<h3><a href="<?= base_url('admin/register_recruiter'); ?>">2. View All Registered Recruiters</a></h3>
<h3><a href="<?= base_url('admin/applied_jobs')?>">3. View All Applied Jobs By Students to Companies</a></h3>
<h3><a href="<?= base_url('admin/offered_jobs')?>">4. View All Offered Jobs By Companies to Students</a></h3></center>
</div>
</div>

<?php include("footer.php"); ?>