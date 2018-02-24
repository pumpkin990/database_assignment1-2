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
	<div class="page-header">
    <h1>Assignment1&2
        <small>Student Name:Nan Wu Student Number:117220325</small>
    </h1>
	</div>
	
	<nav class="navbar navbar-default" role="navigation">
	    <div class="container-fluid">
	    <div class="navbar-header">
	        <a class="navbar-brand" href="#">CRUD</a>
	    </div>
	    <div>
	        <ul class="nav navbar-nav">
	            <li><a href="../functions/query.php">Queries</a></li>
	            <li><a href="#">Insert</a></li>
	            <li><a href="#">Update</a></li>
	            <li><a href="#">Delete</a></li>
	        </ul>
	    </div>
	    </div>
	</nav>
</div>
</div>
<div class="table-responsive">
<?php
if(isset($_GET["staffnumber"])){


	$staffNo =  $_GET["staffnumber"];
	$result = getStaffNameByStaffNumber($getlink,$staffNo);
echo '
  <table class="table">
    <caption>Details</caption>
    <thead>
      <tr>
        <th>Name</th></tr>
    </thead>
    <tbody>
 ';
		
echo '
    <tr>
        <td>'.$result.'</td>
    </tr>';
echo '
  </table>
</div>
';	
}else if(isset($_GET["lastname"])){
	$lastname = $_GET["lastname"];
	$result = getStaffAddressAndPhoneByLastname($getlink,$lastname);
	echo '
  <table class="table">
    <caption>Details</caption>
    <thead>
      <tr>
        <th>Address</th>
        <th>Phone</th></tr>
    </thead>
    <tbody>
 ';
while($row=mysqli_fetch_row($result)){
echo '
    <tr>
        <td>'.$row[3].'</td>
        <td>'.$row[4].'</td>
    </tr>';
}
echo '
  </table>
</div>
';	
}else if(isset($_GET["staffnumber1"]) and isset($_GET["staffaddress"])){
	$staffnumber1 = $_GET["staffnumber1"];
	$staffaddress = $_GET["staffaddress"];
	$result = updateAddressByStaffNumber($getlink,$staffnumber1,$staffaddress);
	if($result){
		echo "Update succeed!!!";
	}else{
		echo "Update failed!!!";
	}

}else if(isset($_GET["staffnumber2"]) and isset($_GET["staffsalary"])){
	$staffnumber2 = $_GET["staffnumber2"];
	$staffsalary = $_GET["staffsalary"];
	$result = updateSalaryByStaffNumber($getlink,$staffnumber2,$staffsalary);
	if($result){
		echo "Update succeed!!!";
	}else{
		echo "Update failed!!!";
	}
}
?>
<footer class="footer">
    <div class="container">
       <p class="text-muted" align="center">Assignment1&2 Nan Wu 117220325</p>
    </div>
</footer>
</body>
</html>