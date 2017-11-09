<?php include("header.php"); ?>

<?= form_open_multipart('student/upload_cv');?>
<?= form_upload(['name'=>'resume']);?>
<?= form_submit('submit','upload');?>
<?= form_close();?>
<?php if($path): ?>
<div>
    <a href="<?= $path;?>", target="blank">Uploaded Resume</a>
</div>
<?php endif; ?>

<?php if (isset($upload_error)) {
    # code...
    echo "$upload_error";
}
?>

<?php if ($msg = $this->session->flashdata('update')) {
    # code...
    echo $msg;
}
?>
<?php include("footer.php");?>