<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="<?php echo site_url('asset') ?>/logo.png" type="png" sizes="16x16">
	<title>E-Resource Class</title>
	<link rel="icon" href="asset/logo.jpg" type="png" sizes="16x16">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style type="text/css">body { background-color: #dcf7f4; }</style>
<body>
	<div style="margin: 30px;">
<h5>Execution Time: {elapsed_time}</h5>

<h2 style="text-align: center; margin: 100px;">E-Resources</h2>



<div class="p-3 mb-2 bg-info text-white" style="border-radius: 30px; width: 35%; text-align: center; position: absolute;top: 50%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%)">

<h3><?php echo $this->session->userdata('user_login')['name']; ?>, this is your test result:</h3>
<br><br>
<h4>Skor Pretest: <?php echo $nilai_pretest ?></h4>
<h4>Skor Post test: <?php echo $nilai_posttest ?></h4>

</div>
	</div>

</body>
</html>
