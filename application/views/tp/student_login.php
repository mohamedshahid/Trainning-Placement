<?php include("header.php");?>

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
    ?></div>
</div>
<div id="innersection">
<h2 style="text-align:center">Student login</h2>
<?php echo form_open('student/student_login'); ?>
<table id="innerTable">
<tr>
<td colspan="2"><h3 style="text-align:center">Student Login</h3><hr noshade="noshade" color="navy" /></td>
</tr>
<tr>
<td><label>Username: </label></td>
<td><?= form_input(['name'=>'username']);?></td>
</tr>
<tr>
<td><label>Password: </label></td>
<td><?= form_password(['name'=>'password'])?></td>
</tr>
<tr>
<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= form_submit(['name'=>'login','value'=>'Login'])?>
&nbsp;&nbsp;&nbsp;<?= form_reset(['name'=>'reset','value'=>'Reset'])?></td>
</tr>
<tr>
<td colspan="2">
<ul>
<li><a href="<?= base_url('student/forget_password_link')?>">Forgot password?</a></li>
<li><a href="<?= base_url('home/student_registration')?>">Click here to register!</a></li>
</ul></td>
</tr>
</table>
<?= form_close();?>
<br>
<table border="0" align="center">
<tr>
<td><?= form_error('username');?></td>
<td><?= form_error('password');?></td>
</tr>
</table>
</div>
</div>

<?php include("footer.php");?>