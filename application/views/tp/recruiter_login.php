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
<div class="page-name">Page name</div>
</div>
<div id="innersection">
<h2 style="text-align:center">Recruiter login</h2>
<form action="Recruiter/act_recruiter_login.php" method="post" name="RecruiterLogin">
<table id="innerTable">
<tr>
<td colspan="2"><h3 style="text-align:center">Recruiter Login</h3><hr noshade="noshade" color="navy" /></td>
</tr>
<tr>
<td><label>Username: </label></td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td><label>Password: </label></td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="login" value="Login">
&nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Reset"></td>
</tr>
<tr>
<td colspan="2">
<ul>
<li><a href="Recruiter/frmRecruiterForgotPassword.php">Forgot password?</a></li>
<li><a href="Recruiter/frmRecruiterRegistration.php">Click here to register!</a></li>
</ul></td>
</tr>
</table>
</form>
<br>
<table border="0" align="center">
<tr>
<td style="text-align:center"><?php
          if(isset($_GET['msg']))
          {
              $message = $_GET['msg'];
              if($message == 1)
              echo "<span class='success'>Your entry has been added successfully! Please login now.</span>";
              if($message == 2)
              echo "<span class='failed'>Invalid Username or Password!</span>";
              if($message == 5)
              echo "<span class='failed'>You are logged out successfully!</span>";
              if($message == 6)
              echo "<span class='failed'>Session timeout!</span>";
          }
      ?></td>
</tr>
</table>
</div>
</div>

<?php include("footer.php");?>