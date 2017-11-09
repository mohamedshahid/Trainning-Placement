<?php include("header.php");?>

<div id="collegepic"></div>

<div id="section">
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
</div>
<div id="innersection">
<h2 style="text-align:center">Admin login</h2>
<?php echo form_open('admin/admin_login'); ?>
<table id="innerTable">
<tr>
<td colspan="2"><h3 style="text-align:center">Admin Login</h3><hr noshade="noshade" color="navy" /></td>
</tr>
<tr>
<td><label>Username: </label></td>
<td><?= form_input(['name'=>'username']);?></td>
</tr>
<tr>
<td><label>Password: </label></td>
<td><?= form_password(['name'=>'password']);?></td>
</tr>
<tr>
<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!-- <input name="login" value="Login" type="submit"> -->
<?php echo form_submit(['name'=>'login','value'=>'Login']); ?>
&nbsp;&nbsp;&nbsp;<?php echo form_reset(['name'=>'reset','value'=>'Reset'])?></td>
</tr>
</table>
<?= form_close(); ?>
<br />
<table border="0" align="center">
<tr>
<td style="text-align:center">
<?php echo form_error('username')?></td>
<td style="text-align:center">
<?php echo form_error('password')?></td>
<?php if ($error = $this->session->flashdata('login_failed')): ?>
<td>
<?php echo $error; ?>
</td>
<?php endif; ?>
</tr>
</table>
</div>
</div>

<?php include("footer.php");?>