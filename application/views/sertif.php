<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="<?php echo site_url('asset') ?>/logo.png" type="png" sizes="16x16">
	<title>E-Resource Class</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>

body { background-color: #dcf7f4; }
</style>
</head>
<body>
<h4 style="margin: 30px;">Execution Time: {elapsed_time}</h4>
<!-- <?php var_dump($user) ?> -->
<h2 style="text-align: center; margin: 30px;">E-Resources</h2>

<div style="width: 50%; text-align: center; position: absolute;top: 55%; left: 50%;margin-right: -50%;transform: translate(-50%, -50%)">
<h3>Congratulations, <?php echo $this->session->userdata('user_login')['name']; ?>!</h3>


<img style="height: 430px; width: 600px;" src="<?php echo site_url('asset') ?>/sertifnya.png">

</div>

</body>
</html>
