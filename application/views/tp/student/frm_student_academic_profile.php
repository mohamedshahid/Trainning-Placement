<?php include("header.php");?>

<div id="section">
<div id="innersection">
<?php echo form_open('student/update_academic_profile');?>
<table cellspacing="2" cellpadding="5" style="border-collapse:collapse" align="center">
<tr>
<td><label class="labels">Enrollment No.</label></td>
<td><?php echo $row->EnrollmentNo;?></td>
</tr>
<tr>
<td><label class="labels">Highest Degree</label></td>
<td><select class="textfields" name="HighestDegree">
<option <?php if($row->HighestDegree == "Bachelor of Engineering") echo "Selected='selected'"; ?>>Bachelor of Engineering</option>
      <option <?php if($row->HighestDegree == "Master of Engineering") echo "Selected='selected'"; ?>>Master of Engineering</option>
</select></td>
</tr>
<tr>
<td><label class="labels">Branch</label></td>
<td><select class="textfields" name="branch">
<option <?php if($row->Branch == "Computer Engineering") echo "Selected='selected'"; ?>>Computer Engineering</option>
      <option <?php if($row->Branch == "Information Technology") echo "Selected='selected'"; ?>>Information Technology</option>
      <option <?php if($row->Branch == "Information Technology") echo "Selected='selected'"; ?>>Instrumentation Engineering</option>
      <option <?php if($row->Branch == "Electronics & Telecomm") echo "Selected='selected'"; ?>>Electronics & Telecomm</option>
      <option <?php if($row->Branch == "Mechanical Engineering") echo "Selected='selected'"; ?>>Mechanical Engineering</option>
</select></td>
</tr>
<tr>
<td><label class="labels">Passing Year</label></td>
<td><?= form_input(['name'=>'PassingYear','type'=>'text','class'=>'textfields','value'=>set_value('PassingYear',$row->PassingYear)]);?></td>
</tr>
<tr>
<td><label class="labels">Percentage</label></td>
<td><?= form_input(['name'=>'Percentage','type'=>'text','class'=>'textfields','value'=>set_value('Percentage',$row->Percentage)]);?></td>
</tr>
<tr>
<td><label class="labels">CGPA</label></td>
<td><?= form_input(['name'=>'CGPA','type'=>'text','class'=>'textfields','value'=>set_value('CGPA',$row->CGPA)]);?></td>
</tr>
<tr>
<td><label class="labels">Diploma/HSC Percentage</label></td>
<td><?= form_input(['name'=>'DiplomaHSCPercentage','type'=>'text','class'=>'textfields','value'=>set_value('DiplomaHSCPercentage',$row->DiplomaHSCPercentage)]);?></td>
</tr>
<tr>
<td><label class="labels">SSC Percentage</label></td>
<td><?= form_input(['name'=>'SSCPercentage','type'=>'text','class'=>'textfields','value'=>set_value('SSCPercentage',$row->SSCPercentage)]);?></td>
</tr>
<tr>
<td><label class="labels">Area of Specialization</label></td>
<td><?= form_input(['name'=>'AreaOfSpecialization','type'=>'text','class'=>'textfields','value'=>set_value('AreaOfSpecialization',$row->AreaOfSpecialization)]);?></td>
</tr>
<tr>
<td><label class="labels">Technical Experience</label></td>
<td><?= form_input(['name'=>'TechnicalExperience','type'=>'text','class'=>'textfields','value'=>set_value('TechnicalExperience',$row->TechnicalExperience)]);?></td>
</tr>
<tr>
<td><label class="labels">Work Field</label></td>
<td><select class="textfields" name="Workfield">
<option selected="selected"></option>
<option <?php if($row->WorkField == "IT/Software") echo "Selected='selected'"; ?>>IT/Software</option>
      <option <?php if($row->WorkField == "Finance & Accounting") echo "Selected='selected'"; ?>>Finance & Accounting</option>
      <option <?php if($row->WorkField == "IT/Networking") echo "Selected='selected'"; ?>>IT/Networking</option>
      <option <?php if($row->WorkField == "Sales & Marketing") echo "Selected='selected'"; ?>>Sales & Marketing</option>
      <option <?php if($row->WorkField == "Administration") echo "Selected='selected'"; ?>>Administration</option>
      <option <?php if($row->WorkField == "Management") echo "Selected='selected'"; ?>>Management</option>
      <option <?php if($row->WorkField == "Communications") echo "Selected='selected'"; ?>>Communications</option>
      <option <?php if($row->WorkField == "Research & Development") echo "Selected='selected'"; ?>>Research & Development</option>
</select></td>
</tr>
<tr>
<td colspan="2" align="right"><?= form_submit(['name'=>'submit','value'=>'Update','class'=>'btn']);?></td>
</tr>
<tr>
    <td colspan="2" style="text-align:center">
        <?php if($msg = $this->session->flashdata('update'));
        echo "$msg"; ?>
    </td>
    </tr>
</table>
<?= form_close();?>
</div>
</div>

<?php include("footer.php");?>