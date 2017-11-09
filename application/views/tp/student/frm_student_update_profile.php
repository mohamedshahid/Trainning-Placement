<?php include("header.php"); ?>

<div id="section">
<div id="innersection">
<?php echo form_open("student/edit_profile/");?>
<table cellspacing="2" cellpadding="5" style="border-collapse:collapse" align="center">
<tr>
<td><label class="labels">First Name</label></td>
<td><?= form_input(['name'=>'FirstName','class'=>'textfields','id'=>'FirstName','value'=>set_value('FirstName',$student->FirstName)]);?></td>
</tr>
<tr>
<td><label class="labels">Last Name</label></td>
<td><?= form_input(['name'=>'LastName','class'=>'textfields','id'=>'LastName','value'=>set_value('LastName',$student->LastName)]);?></td>
</tr>
<tr>
<td><label class="labels">Date of Birth</label></td>
<td><?= form_input(['name'=>'DOB','class'=>'textfields','id'=>'DOB','value'=>set_value('DOB',$student->DOB)]);?><br />
  <em>(format - 'yyyy-mm-dd')</em></td>
</tr>
<tr>
<td><label class="labels">Address</label></td>
<td><?= form_textarea(['name'=>'Address','class'=>'textarea','id'=>'Address','value'=>set_value('Address',$student->Address)]);?></td>
</tr>
<tr>
<td><label class="labels">City</label></td>
<td><?= form_input(['name'=>'City','class'=>'textfields','id'=>'City','value'=>set_value('City',$student->City)]);?></td>
</tr>
<tr>
<td><label class="labels">State</label></td>
<td><?= form_input(['name'=>'State','class'=>'textfields','id'=>'State','value'=>set_value('State',$student->State)]);?></td>
</tr>
<tr>
<td><label class="labels">Pin Code</label></td>
<td><?= form_input(['name'=>'PinCode','class'=>'textfields','id'=>'PinCode','value'=>set_value('PinCode',$student->PinCode)]);?></td>
</tr>
<tr>
<td><label class="labels">Email ID</label></td>
<td><?= form_input(['name'=>'EmailID','class'=>'textfields','id'=>'EmailID','value'=>set_value('EmailID',$student->EmailID)]);?></td>
</tr>
<tr>
<td><label class="labels">Phone No.</label></td>
<td><?= form_input(['name'=>'Phone1','class'=>'textfields','id'=>'Phone1','value'=>set_value('Phone1',$student->Phone1)]);?></td>
</tr>
<tr>
<td colspan="2" align="right"><?php echo form_submit(['name'=>'submit','value'=>'update','class'=>'btn']);?></td>
</tr>
<tr>
    <td colspan="2" style="text-align:center">
        <?php if($msg = $this->session->flashdata('update'));
        echo "$msg"; ?>
    </td>
</tr>
</table>
<?= form_close(); ?>
</div>
</div>

<?php include("footer.php"); ?>