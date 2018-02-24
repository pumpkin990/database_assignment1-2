<?php
	function dream_connect(){
		$domain = "localhost";
		$username = "root";
		$password = "123456";

		$conn = mysqli_connect($domain,$username,$password);
		if(!$conn){
			echo "Could not connect!";
		}else{
			echo "Connected!";
		}

		$selected = mysqli_select_db($conn,"dreamhome");
		if(!$selected){
			echo "Could not select!";
		}else{
			echo "Selected!";
		}

		return $conn;
	}

	function display($conn){
		$sql = "select * from Branch";
		$result = mysqli_query($conn,$sql);
		return $result;
	}

	function getStaffNameByStaffNumber($getlink,$staffNumber){
		$sql = "select * from Staff where Sno = '".$staffNumber."'";
		$result = mysqli_query($getlink,$sql);
		$row = mysqli_fetch_array($result);
		return $row["Fname"]." ".$row["Lname"];
	}

	function getStaffAddressAndPhoneByLastname($getlink,$lastname){
		$sql = "select * from Staff where Lname = '".$lastname."'";
		$result = mysqli_query($getlink,$sql);
		//$row = mysqli_fetch_array($result);
		return $result;
	}

	function updateAddressByStaffNumber($getlink,$staffNo,$address){
		$sql = "update Staff set Address = '".$address."' where Sno = '".$staffNo."'";
		$flag = mysqli_query($getlink,$sql);
		return $flag;
	}

	function updateSalaryByStaffNumber($getlink,$staffNo,$salary){
		$sql = "update Staff set Salary = '".$salary."' where Sno = '".$staffNo."'";
		$flag = mysqli_query($getlink,$sql);
		return $flag;
	}
?>