<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HDFC</title>
	<link rel="stylesheet" href="../assets/css-js/styles.css">
	<link rel="stylesheet" href="../assets/css-js/parshley.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul id="top-Nav-Details">
					<li class="col-md-2 activeLink" data-name="personal-details">Personal Details</li>
					<li class="col-md-2" data-name="permanent-adress">Permanent Address</li>
					<li class="col-md-2" data-name="avail-banking-services">Avail Banking Services</li>
					<li class="col-md-2" data-name="identification">Identification</li>
					<li class="col-md-2" data-name="nominee-details">Nominee Details </li>
					<li class="col-md-2" data-name="declaration">Declaration</li>
				</ul>
			</div>
		</div>
		<hr>
		<div class="container">
			<!--    personal details-->
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<form method="POST" action="./finalsubmit.php" id="total-Form">
						<div id="allTheDivs">
							<div id="personal-details" class="form-section current">
								<fieldset class="form-group">
									<legend>Personal Details</legend>
									<p><strong>Customer Type</strong></p>
									<div class="form-check col-md-3">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="HDFC-cm-type" value="public" checked>
											Public
										</label>
									</div>
									<div class="form-check col-md-3">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="HDFC-cm-type" value="staff">
											Staff
										</label>
									</div>
									<div class="form-check col-md-3">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="HDFC-cm-type" value="Senior-Citizen">
											Senior Citizen
										</label>
									</div>
									<div class="form-check col-md-3">
										<label class="form-check-label">
											<input type="radio" class="form-check-input" name="HDFC-cm-type" value="Minor">
											Minor
										</label>
									</div><br> <br>
									<div class="form-group">
										<label for="HDFC-name">Full Name:</label>
										<input type="text" class="form-control" id="HDFC-name" placeholder="Enter Name" required name="HDFC-name" data-parsley-length="[4, 20]">

									</div>
									<div class="form-group">
										<label for="HDFC-name">Father/Gaurdian Name:</label>
										<input type="text" class="form-control" id="HDFC-fg-name" placeholder="Enter Father/Gaurdian Name" name="HDFC-fg-name" required data-parsley-length="[4, 20]">

									</div>
									<div class="form-group">
										<label>Date of Birth</label>
										<input type="date" class="form-control" id="HDFC-DOB" placeholder="Date of Birth" name="HDFC-DOB" required>

									</div>
									<div class="form-group">
										<label for="HDFC-m-s">Marital Status</label>
										<select class="form-control" id="HDFC-m-s" name="HDFC-m-s" required>
											<option selected="selected">Single</option>
											<option>Married</option>
										</select>
									</div>
									<div class="form-group">
										<label for="HDFC-o-t">Occupation Type</label>
										<select class="form-control" id="HDFC-o-t" name="HDFC-o-t" required>
											<option selected="selected" value="Student">Student</option>
											<option value="Business">Business</option>
											<option value="Agriculture">Agriculture</option>
											<option value="Government Dpt">Government Dpt</option>
											<option value="Educational Institue">Educational Institue</option>
											<option value="Trust">Trust</option>
											<option value="Others">Others</option>
										</select>
									</div>
									<div class="form-group">
										<label for="HDFC-n-b">Nature Of Bussiness</label>
										<select class="form-control" id="HDFC-n-b" name="HDFC-n-b" required>
											<option selected="selected" value="Goods">Goods</option>
											<option value="Services">Services</option>
											<option value="Mix">Mix Of Goods and Services</option>
											<option value="None">None</option>
											<option value="Others">Others</option>
										</select>
									</div>
									<div class="form-group">
										<label for="HDFC-c-t">Company Type</label>
										<select class="form-control" id="HDFC-c-t" name="HDFC-c-t" required>
											<option selected="selected" value="Private limited company">Private limited company</option>
											<option value="Public limited company">Public limited company</option>
											<option value="None">None</option>
											<option value="Others">Others</option>
										</select>
									</div>
								</fieldset><br><br>
							</div>
							<div id="permanent-adress" class="form-section">
								<fieldset class="form-group">
									<legend>Permanent Adress</legend>
									<!-- address-line1 input-->
									<div class="control-group">
										<label class="control-label">Address Line 1</label>
										<div class="controls">
											<input id="address-line1" class="form-control" name="address-line1" type="text" placeholder="address line 1"
											required>
											<p class="help-block">Street address, P.O. box, company name, c/o</p>
										</div>
									</div>
									<!-- address-line2 input-->
									<div class="control-group">
										<label class="control-label">Address Line 2</label>
										<div class="controls">
											<input id="address-line2" class="form-control" name="address-line2" type="text" placeholder="address line 2"
											required>
											<p class="help-block">Apartment, suite , unit, building, floor, etc.</p>
										</div>
									</div>
									<!-- city input-->
									<div class="control-group">
										<label class="control-label">City / Town</label>
										<div class="controls">
											<input id="HDFC-city" class="form-control" type="text" placeholder="city" class="input-xlarge" name="HDFC-city" required>
											<p class="help-block"></p>
										</div>
									</div>
									<!-- region input-->
									<div class="control-group">
										<label class="control-label">State / Province / Region</label>
										<div class="controls">
											<input id="HDFC-region" class="form-control" name="HDFC-region" type="text" placeholder="state / province / region"
											class="input-xlarge" required>
											<p class="help-block"></p>
										</div>
									</div>
									<!-- postal-code input-->
									<div class="control-group">
										<label class="control-label">Zip / Postal Code</label>
										<div class="controls">
											<input id="HDFC-postal-code" class="form-control" name="HDFC-postal-code" type="text" placeholder="zip or postal code"
											class="input-xlarge" data-parsley-type="number" data-parsley-maxlength="6"
											required data-parsley-minlength="6">
											<p class="help-block"></p>
										</div>
									</div>
									<!-- country select -->
									<div class="control-group">
										<label class="control-label">Country</label>
										<div class="controls">
											<select id="HDFC-country" class="form-control" name="HDFC-country" class="input-xlarge" required>
												<option value="India">India</option>

												<option value="Other(not-india)">Other</option>
											</select>
										</div>
									</fieldset>
								</div>
								<div id="avail-banking-services" class="form-section">
									<fieldset class="form-group">
										<legend>Avail Banking Services</legend>
										<div class="form-group">
											<label for="HDFC-Atm-name">Name To Be Displayed On ATM:</label>
											<input type="text" class="form-control" id="HDFC-Atm-name" required name="HDFC-Atm-name">
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="HDFC-net-ser" id="HDFC-net-ser" value="Yes">
												Click Here If You Want To Use NetBanking Services
											</label><br><br>
										</div>
										<div class="form-group">
											<label for="HDFC-Atm-email">Email-Adress:</label>
											<input type="email" class="form-control" id="HDFC-Atm-email" required name="HDFC-Atm-email">
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="HDFC-mob-ser" id="HDFC-mob-ser" value="Yes">
												Click Here If You Want To Use MoblileBanking Services
											</label><br><br>
										</div>
										<div class="form-group">
											<label for="HDFC-Atm-phno">Phone-Number:</label>
											<input type="text" class="form-control" id="HDFC-Atm-phno" required data-parsley-type="number" data-parsley-minlength="10" data-parsley-maxlength="10" name="HDFC-Atm-phno">
										</div>
									</fieldset>
								</div>
								<div id="identification" class="form-section">
									<fieldset class="form-group">
										<legend>Identification</legend>
										<div class="form-group">
											<label for="HDFC-pic">Upload Profile Image: </label>
											<input type="file" class="form-control" id="HDFC-pic" name="HDFC-pic">
										</div>
										<div class="form-group">
											<label for="HDFC-adar-no">Adar Card No:</label>
											<input type="text" class="form-control" id="HDFC-adar-no" required data-parsley-minlength="12" data-parsley-maxlength="12"  name="HDFC-adar-no">
										</div>
										<div class="form-group">
											<label for="HDFC-pan-no">Pan Card No:</label>
											<input type="text" class="form-control" id="HDFC-pan-no" required data-parsley-type="alphanum"	 data-parsley-minlength="10" data-parsley-maxlength="10"
											name="HDFC-pan-no">
										</div>
									</fieldset>
								</div>
								<div id="nominee-details" class="form-section">
									<fieldset class="form-group">
										<legend>Introducer/Nominee Details(should be a member of HDC)</legend>
										<div class="form-group">
											<label for="HDFC-nom-name">Fullname:</label>
											<input type="text" class="form-control" id="HDFC-nom-name" required name="HDFC-nom-name">
										</div>
										<div class="form-group">
											<label for="HDFC-nom-no">Account No:</label>
											<input type="text" class="form-control" id="HDFC-nom-no" required data-parsley-type="number" data-parsley-minlength="14" data-parsley-maxlength="14" name="HDFC-nom-no">
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" id="HDFC-add-nom" name="HDFC-add-nom">
												Click Here If You Want To Add Nominee to your account
											</label><br><br>
										</div>
										<div class="form-group">
											<label for="HDFC-nom-short-name">Nominee Name To Be Displayed As:</label>
											<input type="text" class="form-control" id="HDFC-nom-short-name" required name="HDFC-nom-short-name" required>
										</div>
									</fieldset>
								</div>
								<div id="declaration" class="form-section">
									<fieldset class="form-group">
										<legend>Declaration</legend>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" required id="HDFC-conform" name="HDFC-conform">
												Click Here To Accept The Following Declaration
											</label><br><br>
										</div>
										<p><strong>
											I/We, hereby confirm that I/We have read and understand the declaration and confirm that all the details provided on the form are correct. I undertake to inform you of any changes therein immediately. </strong>
										</p>
									</fieldset>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-md-offset-3">
									<div class="form-navigation">
										<button type="button" class="previous btn btn-primary pull-left">&lt; Previous</button>
										<button type="button" class="next btn btn-primary pull-right">Next &gt;</button>
										<input type="submit" name="submit" class="btn btn-default pull-right">
										<span class="clearfix"></span>
									</div>
								</div>
							</div><br><br><br>
						</form>
					</div>
				</div>


			</div>

		</div>
		<script src="https://code.jquery.com/jquery-3.1.1.js" type="text/javascript"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="../assets/css-js/parshley.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="../assets/css-js/scripts.js"></script>
	</body>
	</html>