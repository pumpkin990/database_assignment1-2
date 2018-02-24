<?php
	include "../urtils.php";
	$getlink = dream_connect();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<title>Assignment1&2</title>

</head>
<body>
  <img src="/assignments/images/ucc.png" class="img-responsive" alt="Responsive image">
	<div class="page-header">
    <h1>Assignment1&2
        <small>Student Name:Nan Wu Student Number:117220325</small>
    </h1>
	</div>

  <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">DreamHome</a>
      </div>
      <div class="col-md-6">
          <ul class="nav navbar-nav">
              <li><a href="/assignments/home.php">Home</a></li>
              <li><a href="/assignments/CS2501 PHP Assignment 2018.pdf">Assignment description</a></li>
              <li><a href="/assignments/Topic 2.1 DDL-DCL-Views.pdf">DDL/DCL/Views</a></li>
              <li><a href="#">About</a></li>
          </ul>
      </div>
      </div>
  </nav>
</div>
</div>

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../images/read.png" width="200" height="200" class="img-rounded" alt="Generic placeholder thumbnail">
              <a href="#"><h4 align="center">Read</h4></a>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../images/update.png" width="200" height="200" class="img-rounded" alt="Generic placeholder thumbnail">
              <a href="#"><h4 align="center">Update</h4></a>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../images/create.png" width="200" height="200" class="img-rounded" alt="Generic placeholder thumbnail">
              <a href="#"><h4 align="center">Create</h4></a>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="../images/delete.png" width="200" height="200" class="img-rounded" alt="Generic placeholder thumbnail">
              <a href="#"><h4 align="center">Delete</h4></a>
            </div>
          </div>

          <h2 class="sub-header">Section title</h2>
          <form action="response.php" method = "get" class="form-inline">
    			  <div class="form-group">
    			    <p class="form-control-static">Change the address of a staff member, specified by staff number:</p>
    			  </div>
    			  <div class="form-group">
    			    <input type="text" class="form-control" name="staffnumber1" placeholder="Staff number">
    			  </div>
            <div class="form-group">
              <input type="text" class="form-control" name="staffaddress" placeholder="Update address">
            </div>
    			  <button type="submit" class="btn btn-default">Submit</button>
		      </form>

    		  <form action="response.php" method = "get" class="form-inline">
    			  <div class="form-group">
    			    <p class="form-control-static">Change the salary of a staff member, specified by staff number:</p>
    			  </div>
    			  <div class="form-group">
    			    <input type="text" class="form-control" name="staffnumber2" placeholder="Staff number">
    			  </div>
            <div class="form-group">
              <input type="text" class="form-control" name="staffsalary" placeholder="Update salary">
            </div>
    			  <button type="submit" class="btn btn-default">Submit</button>
    		  </form>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <p class="text-muted" align="center">Assignment1&2 Nan Wu 117220325</p>
      </div>
    </footer>
</body>
</html>