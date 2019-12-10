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

<h2 style="text-align: center; margin: 100px;">E-Resources Journal List</h2>




<table class="table table-striped table-dark" style="width: 50%; position: absolute;top: 60%; left: 50%;margin-right: -50%;transform: translate(-50%, -50%)">
  <tbody>
  	  	
  	<thead style="text-align: center;">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Full Name</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <?php foreach($journal as $row): ?>
    <tr>   
    <td><?php echo $row->name; ?></td>
    <td><?php echo $row->fullName; ?></td>
    <td><?php echo $row->description; ?></td>

</tr>
<?php endforeach; ?>
  </tbody>
</table>


	</div>

</body>
</html>
