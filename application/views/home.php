<!DOCTYPE html>
<link rel="icon" href="<?php echo site_url('asset') ?>/logo.png" type="png" sizes="16x16">
<html>
<head>
<title>E-Resource Class</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
  body { background-color: #dcf7f4; }
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>
</head>
<body>
     <h4 style="margin: 30px;">Execution Time: {elapsed_time}</h4>

<div style="position: absolute;
    top: 45%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) ">

<h1 style="text-align: center; margin-bottom: 40px; font-family: Helvetica;">Welcome, <?php echo $this->session->userdata('user_login')['name']; ?>!</h1>
 


<button class="button button4"><a href="<?php echo base_url('journal/index') ?>">Jelajahi</a></button>
<button class="button button4"><a href="<?php echo base_url('certificate/showSertif') ?>">Sertifikat</a></button>
<button class="button button4"><a href="<?php echo base_url('userFacade/showResult') ?>">Skor Test</a></button>
</div>
</body>
</html>
