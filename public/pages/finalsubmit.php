
<?php
if (!($_SERVER['REQUEST_METHOD'] === 'POST') && !(isset($_POST['submit']))) {
	header("Location: ../../index.php");
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$_POST['HDFC-name']?></title>
	<link rel="stylesheet" href="../assets/css-js/styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h4 class="text-center text-primary">Final Details You Entered</h4>
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading text-center"><span class="text-success"><strong>Personal Details</strong></span></div>
				<div class="panel-body">
					<p><strong>Customer Type: &nbsp;<span class="text-info"><?=$_POST['HDFC-cm-type']?></span></strong></p>
					<p><strong>Full Name: &nbsp;<span class="text-info"><?=$_POST['HDFC-name']?></span></strong></p>
					<p><strong>Father/Gaurdian Name: &nbsp;<span class="text-info"><?=$_POST['HDFC-fg-name']?></span></strong></p>
					<p><strong>Date of Birth: &nbsp;<span class="text-info"><?=date("F j, Y", strtotime($_POST['HDFC-DOB']))?></span></strong></p>
					<p><strong>Marital Status: &nbsp;<span class="text-info"><?=$_POST['HDFC-m-s']?></span></strong></p>
					<p><strong>Occupation Type: &nbsp;<span class="text-info"><?=$_POST['HDFC-o-t']?></span></strong></p>
					<p><strong>Nature Of Bussiness: &nbsp;<span class="text-info"><?=$_POST['HDFC-n-b']?></span></strong></p>
					<p><strong>Company Type: &nbsp;<span class="text-info"><?=$_POST['HDFC-c-t']?></span></strong></p>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading text-center"><span class="text-success"><strong>Permanent Address</strong></span></div>
				<div class="panel-body">
					<p><strong>Address Line 1: &nbsp;<span class="text-info"><?=$_POST['address-line1']?></span></strong></p>
					<p><strong>Address Line 2: &nbsp;<span class="text-info"><?=$_POST['address-line2']?></span></strong></p>
					<p><strong>City / Town: &nbsp;<span class="text-info"><?=$_POST['HDFC-city']?></span></strong></p>
					<p><strong>State / Province / Region: &nbsp;<span class="text-info"><?=$_POST['HDFC-region']?></span></strong></p>
					<p><strong>Zip / Postal Code: &nbsp;<span class="text-info"><?=$_POST['HDFC-postal-code']?></span></strong></p>
					<p><strong>Country: &nbsp;<span class="text-info"><?=$_POST['HDFC-country']?></span></strong></p>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading text-center"><span class="text-success"><strong>Avail Banking Services</strong></span></div>
				<div class="panel-body">
					<p><strong>Name To Be Displayed On ATM: &nbsp;<span class="text-info"><?=$_POST['HDFC-Atm-name']?></span></strong></p>
					<p><strong>Use NetBanking Services: &nbsp;
<span class="text-info"><?php if (isset($_POST['HDFC-net-ser'])) {echo "Yes";} else {
	echo "No";
}
?></span></strong></p>
					<p><strong>Email-Address: &nbsp;<span class="text-info"><?=$_POST['HDFC-Atm-email']?></span></strong></p>
					<p><strong>Use MoblileBanking Services: &nbsp;
<span class="text-info"><?php if (isset($_POST['HDFC-mob-ser'])) {echo "Yes";} else {
	echo "No";
}
?></span></strong></p>
					<p><strong>Phone-Number: &nbsp;<span class="text-info"><?=$_POST['HDFC-Atm-phno']?></span></strong></p>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading text-center"><span class="text-success"><strong>Identification</strong></span></div>
				<div class="panel-body">
					<p><strong>Adar Card No: &nbsp;<span class="text-info"><?=$_POST['HDFC-adar-no']?></span></strong></p>
					<p><strong>Pan Card No: &nbsp;<span class="text-info"><?=$_POST['HDFC-pan-no']?></span></strong></p>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading text-center"><span class="text-success"><strong>Introducer/Nominee Details</strong></span></div>
				<div class="panel-body">
					<p><strong>Fullname: &nbsp;<span class="text-info"><?=$_POST['HDFC-nom-name']?></span></strong></p>
					<p><strong>Account No: &nbsp;<span class="text-info"><?=$_POST['HDFC-nom-no']?></span></strong></p>
					<p><strong>Nominee Name To Be Displayed As: &nbsp;<span class="text-info"><?=$_POST['HDFC-nom-short-name']?></span></strong></p>
					<p><strong>Add Nominee to your account: &nbsp;
<span class="text-info"><?php if (isset($_POST['HDFC-add-nom'])) {echo "Yes";} else {
	echo "No";
}
?></span></strong></p>
				</div>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<button class="btn btn-danger" onclick="window.history.back()">Go back and Edit</button>
				<a href="./success.php" title="Success" class="btn btn-success pull-right">Create Account</a>
			</div><br><br><br>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.1.1.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="../assets/css-js/scripts.js"></script>
</body>
</html>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "durgak";
function bestInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// Creating database connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Checking for valid connection connection
if ($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
}
//variables for Main_Details
$active = 0; $full_name = bestInput($_POST['HDFC-name']); $father_name = bestInput($_POST['HDFC-fg-name']);
$DOB = bestInput(date("F j, Y", strtotime($_POST['HDFC-DOB'])));
$marital_status = bestInput($_POST['HDFC-m-s']); $Applicants = 1; $Account_Type = 'savings';
$customer_type = 'public'; $occupation_type = bestInput($_POST['HDFC-o-t']);  $nature_business = bestInput($_POST['HDFC-n-b']);
$company_type = bestInput(bestInput($_POST['HDFC-c-t']));
// variables for address
$address_line1 = bestInput($_POST['address-line1']); $address_line2 = bestInput($_POST['address-line2']);
$city = bestInput($_POST['HDFC-city']); $state = bestInput($_POST['HDFC-region']); $zip = bestInput($_POST['HDFC-postal-code']);
$country = bestInput($_POST['HDFC-country']);
//variables for Additional_details
$ATM_name = bestInput($_POST['HDFC-Atm-name']); $email = bestInput($_POST['HDFC-Atm-email']);
$phone = bestInput($_POST['HDFC-Atm-phno']); $adhar_no = bestInput($_POST['HDFC-adar-no']);
$pan_no = bestInput($_POST['HDFC-pan-no']);
$nominee_name=bestInput($_POST['HDFC-nom-name']);$nominee_account = bestInput($_POST['HDFC-nom-no']);
$nominee_display=bestInput($_POST['HDFC-nom-short-name']);
//sql1 for main Datails
$sql1 = "INSERT INTO Main_Details (
active, full_name, father_name, DOB, marital_status, Account_Type, Applicants, customer_type,
occupation_type, nature_business, company_type) VALUES 
('$active', '$full_name', '$father_name', '$DOB', '$marital_status', '$Account_Type', '$Applicants', '$customer_type',
'$occupation_type', '$nature_business', '$company_type')";
//sql2 for Address
$sql2 = "INSERT INTO address (
address_line1, address_line2, city, state, zip, country) VALUES 
('$address_line1', '$address_line2', '$city', '$state', '$zip', '$country')";
//sql3 for Additional_details
$sql3 = "INSERT INTO Additional_details (
ATM_name, email, phone, adhar_no, pan_no, nominee_name, nominee_account, nominee_display) VALUES 
('$ATM_name', '$email', '$phone', '$adhar_no', '$pan_no', '$nominee_name', '$nominee_account', '$nominee_display')";
//running 3 queries and checking for errors
if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE){
	echo "Data Sent To Manager To Activate Account";
} else {
	echo "Error: ".$sql1."<br>".$sql2."<br>".$sql3."<br>".$conn->error;
}
//closing the database connection
$conn->close();
?>
