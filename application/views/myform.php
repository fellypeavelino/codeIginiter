<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('form/index'); ?>

<h5>Username</h5>
<?php echo form_input('username'); ?>

<h5>Password</h5>
<?php echo form_input('password'); ?>
<h5>float</h5>
<?php echo form_input('float'); ?>
<h5>Numeral</h5>
<?php echo form_input('numero'); ?>
<div><?php echo form_submit('envia','teste'); ?>
</div>

<?php echo form_close(); ?>

</body>
</html>