<?php
include("header.php");
 ?>


<div id="collegepic"></div>

<div id="section">
<div id="statusbar">
<div class="welcome-text">Welcome <?php
    if(isset($_SESSION['username']))
    {
    echo "<span>" .$_SESSION['username']. "</span>";
    }
    else
    {
        echo "<span>Guest</span>";
    }
    ?></div></div>
<div id="innersection">
<h2 style="text-align:center">Login</h2>
<table border="0" style="margin-left:auto; margin-right:auto">
  <tbody>
    <tr>
      <td><a href="<?= base_url('home/admin_login')?>"><img src="<?= base_url('assets/images/admin-login.png')?>" /></a></td>
      <td><a href="<?= base_url('home/student_login')?>"><img src="<?= base_url('assets/images/student-login.png')?>" /></a></td>
      <td><a href="<?= base_url('home/recruiter_login')?>"><img src="<?= base_url('assets/images/recruiter-login.png')?>" /></a></td>
    </tr>
  </tbody>
</table>
<table border="0" align="center">
<tr>
<?php if ($msg_logout = $this->session->flashdata('logout')): ?>
<td>
<?php echo $msg_logout; ?>
</td>
<?php endif; ?>
</tr>
</table>
</div>
</div>

 <?php
include("footer.php");
 ?>