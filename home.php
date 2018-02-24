<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<title>Assignment1&2</title>

</head>
<body>
  <img src="images/ucc.png" class="img-responsive" alt="Responsive image">
	<?php
		require "urtils.php";
		$getlink = dream_connect();
	?>
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
<!--
<?php 

echo '
<div class="table-responsive">
  <table class="table">
    <caption>Details</caption>
    <thead>
      <tr>
        <th>Bno</th>
        <th>Street</th>
        <th>Area</th>
        <th>City</th>
        <th>Pcode</th>
        <th>Tel_No</th>
        <th>Fax_No</th></tr>
    </thead>
    <tbody>
';

	$result = display($getlink);
	while($row = mysqli_fetch_row($result)){
		
	
echo '
    <tr>
        <td>'.$row[0].'</td>
        <td>'.$row[1].'</td>
        <td>'.$row[2].'</td>
        <td>'.$row[3].'</td>
        <td>'.$row[4].'</td>
        <td>'.$row[5].'</td>
        <td>'.$row[6].'</td>
    </tr>
 
      ';
}
echo '
  </table>
</div>
';
?>
-->
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-8 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="images/read.png" width="200" height="200" class="img-rounded" alt="Generic placeholder thumbnail">
              <a href="/assignments/functions/query.php"><h4 align="center">Read</h4></a>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="images/update.png" width="200" height="200" class="img-rounded" alt="Generic placeholder thumbnail">
              <a href="/assignments/functions/update.php"><h4 align="center">Update</h4></a>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="images/create.png" width="200" height="200" class="img-rounded" alt="Generic placeholder thumbnail">
              <a href="#"><h4 align="center">Create</h4></a>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="images/delete.png" width="200" height="200" class="img-rounded" alt="Generic placeholder thumbnail">
              <a href="#"><h4 align="center">Delete</h4></a>
            </div>
          </div>

          <h2 class="sub-header">Section title</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>
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
