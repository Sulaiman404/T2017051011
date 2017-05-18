<?php
	require_once('conn.php');
	session_start();
	
	$user_id;
	$rating;
	$sprintTotal;
	$runTotal;
	$jumpTotal;
	$throwTotal;
	
	$sprintR;
	$runR;
	$jumpR;
	$throwR;
	
	$sprintP;
	$runP;
	$jumpP;
	$throwP;
	
	
	if(isset($_POST['username'])){
		$sql = "SELECT * FROM users where username='".$_POST['username']."' and password='".$_POST['password']."'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$_SESSION['id'] = $row['id'];
				$_SESSION['username'] = $row['username'];
				$_SESSION['password'] = $row['password'];
				header('Location: ../index.php');
			}
		} else {
				echo "F";
		}
	}
	
	if(isset($_POST['option'])){
		if($_POST['option'] === 'addResult'){
			
			
			$user_id = $_POST['user_id'];
			$rating = $_POST['rating'];
			$sprintTotal = $_POST['sprintTotal'];
			$runTotal = $_POST['runTotal'];
			$jumpTotal = $_POST['jumpTotal'];
			$throwTotal = $_POST['throwTotal'];
			
			$sprintR = $_POST['sprintR'];
			$runR = $_POST['runR'];
			$jumpR = $_POST['jumpR'];
			$throwR = $_POST['throwR'];
			
			$sprintP = $_POST['sprintP'];
			$runP = $_POST['runP'];
			$jumpP = $_POST['jumpP'];
			$throwP = $_POST['throwP'];
			
			if($user_id !== ""){
				$sql = "INSERT INTO results (user_id, sprintTotal, runTotal, jumpTotal, throwTotal, rating, sprint1, sprint2, sprint3, sprint4, sprint5, sprint6, sprint7, sprint8, sprint9, sprint10, sprint11, sprint12, run1, run2, run3, run4, run5, run6, jump1, jump2, jump3, jump4, throw1, throw2, throw3, throw4, throw5, sprintP1, sprintP2, sprintP3, sprintP4, sprintP5, sprintP6, sprintP7, sprintP8, sprintP9, sprintP10, sprintP11, sprintP12, runP1, runP2, runP3, runP4, runP5, runP6, jumpP1, jumpP2, jumpP3, jumpP4, throwP1, throwP2, throwP3, throwP4, throwP5)
				VALUES ('$user_id', '$sprintTotal', '$runTotal', '$jumpTotal', '$throwTotal', '$rating', '$sprintR[0]', '$sprintR[1]', '$sprintR[2]', '$sprintR[3]', '$sprintR[4]', '$sprintR[5]', '$sprintR[6]', '$sprintR[7]','$sprintR[8]', '$sprintR[9]', '$sprintR[10]', '$sprintR[11]', '$runR[0]', '$runR[1]', '$runR[2]', '$runR[3]', '$runR[4]', '$runR[5]', '$jumpR[0]', '$jumpR[1]', '$jumpR[2]', '$jumpR[3]', '$throwR[0]', '$throwR[1]', '$throwR[2]', '$throwR[3]', '$throwR[4]', '$sprintP[0]', '$sprintP[1]', '$sprintP[2]', '$sprintP[3]', '$sprintP[4]', '$sprintP[5]', '$sprintP[6]', '$sprintP[7]','$sprintP[8]', '$sprintP[9]', '$sprintP[10]', '$sprintP[11]', '$runP[0]', '$runP[1]', '$runP[2]', '$runP[3]', '$runP[4]', '$runP[5]', '$jumpP[0]', '$jumpP[1]', '$jumpP[2]', '$jumpP[3]', '$throwP[0]', '$throwP[1]', '$throwP[2]', '$throwP[3]', '$throwP[4]')";
				
				if ($conn->query($sql) === TRUE) {
					echo "1";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			} else {
				echo "2";
			}
			

		}
	}
?>
