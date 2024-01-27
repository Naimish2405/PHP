<?php
require "connection.php";
?>
<?php
	require 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Stacked form</h2>
  <form action="backend.php" method="Post">
  
  <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="" placeholder="enter you name" name="email">
    </div>
	
	<div class="mb-3 mt-3">
      <label for="password">Password:</label>
      <input type="text" class="form-control" id="" placeholder="enter your password" name="password">
    </div>
  
    <div class="mb-3 mt-3">
      <label for="Webname">Web Name:</label>
      <input type="text" class="form-control" id="" placeholder="Enter Web Name" name="webname">
    </div>
    <div class="mb-3">
      <label for="Softname">SofterWare Name:</label>
      <input type="text" class="form-control" id="softname" placeholder="Enter Softername" name="softname">
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
