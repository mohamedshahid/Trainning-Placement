<?php include("header.php"); ?>

<div id="section">
<div id="innersection">
<?php echo form_open('student/search_job') ?>
<table style="margin-left:auto; margin-right:auto">
<tr>
<td><h3>Search Job by Category</h3></td>
</tr>
<tr>
<td><select name="search" class="textfields">
  <option id="0">-- Select --</option>
  <?php foreach ($rows as $row): ?>
    <option id="<?php echo $row->wid; ?>"><?php echo $row->WorkField; ?></option>
  <?php endforeach; ?>
  </select></td>
</tr>
<tr>
<td align="center"><input type="submit" class="btn" value="Search"></td>
</tr>
</table>
<?= form_close(); ?>
</div>
</div>

<?php include("footer.php"); ?>