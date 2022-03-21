<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.form{
			font-family: arial;
			text-align: center;
		}
		.txtInput{
			width: 200px;
			height: 30px;
		}
		.submitButton {
			margin-top : 20px;
			width: 100px;
			height: 40px;
			background-color: red;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<div class="form">
		<form method="post">
		<h3>Name:</h3>
		<input type="text" class="txtInput" name="txtName" width="1000px" required>
		<br>
		<h3>Email:</h3>
		<input type="Email" class="txtInput" name="txtEmail" width="100px" required>
		<br>
		<h3>Phone no:</h3>
		<input type="number" class="txtInput" name="txtPhone" width="100px" required>
		<br>
		<h3>Gender</h3>
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		<input type="radio" name="gender" value="Others">Others
		<h3>Hobbies</h3>
		<input type="checkbox" name="chkboxReading" value="Reading">
		<label for="chkboxReading">Reading</label>
		<input type="checkbox" name="chkboxArt" value="Art">
		<label for="chkboxArt">Art</label>
		<input type="checkbox" name="chkboxDancing" value="Dancing">
		<label for="chkboxDancing">Dancing</label>
		<br>
		<input type="submit" class="submitButton" name="submit" value="Submit">
	</form>
	</div>
    <?php
		if(array_key_exists('submit', $_POST)) {
	            validate();
	        }
		function validate(){
			$name = $_POST['txtName'];
			$email = $_POST['txtEmail'];
			$phone = $_POST['txtPhone'];
			if(strlen($name)<5){
				echo '<script>alert("Name must be at least 5 characters long")</script>';
			}
			elseif(filter_var($email,FILTER_VALIDATE_EMAIL)!=true){
				echo '<script>alert("Email validation failed")</script>';
			}
			elseif($phone<9800000000 && $phone>9700000000){
				echo '<script>alert("Phone validation failed")</script>';
			}
			else{
				echo '<script>alert("Success")</script>';
			}
		}
	?>
</body>
</html>
