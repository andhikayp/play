<!DOCTYPE html>
<link rel="icon" href="<?php echo site_url('asset') ?>/logo.png" type="png" sizes="16x16">
<html>
<head>
  <title>E-Resource Class</title>
<style>
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

<h2>E-Resources</h2>

<button class="button button4">Jelajahi</button>
<button class="button button4"><a href="<?php echo base_url('certificate/showSertif') ?>">Sertifikat</a></button>
<button class="button button4">Skor Test</button>

</body>
</html>
