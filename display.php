
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="include/style.css" >
	<!--Bootstrap-->
	<link rel="stylesheet" type="text/css" href="include/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="include/bootstrap/css/bootstrap-theme.min.css">
	<style type="text/css">body{padding-top: 60px;}</style>
	<!--Javascript-->
	<script src="include/bootstrap/js/bootstrap.min.js"></script>
	<script src="include/bootstrap/js/jquery.min.js"></script>
</head>
<body>
	<div class="mycontainer"><?php
		for ($i=65; $i <= 90; $i++) {?> 
			<a href="?letter=<?php echo "&#".$i;?>"><?php echo "&#".$i. " ";?></a>
			<?php if ($i != 90) {
				echo "|";
			}

		}
		?>

	</div>

<?php
	include_once('function.php');
	include('header.php');
	$con = connection();
	$result="";

		
	
	if ($result == NULL) {
		if (isset($_GET['letter'])) {
			$sql = "SELECT id,first_name,middle_name,surename, name_extention FROM personal_information WHERE surename LIKE '$_GET[letter]%' ORDER BY surename ASC";
		}
		else{
			$sql = "SELECT id,first_name,middle_name,surename, name_extention FROM personal_information ORDER BY surename ASC";
		}
		$result = mysqli_query($con,$sql);
	}	
?>




<?php
	if (!empty($result)) {

	if (mysqli_num_rows($result) > 0) {
    	// output data of each row
	?>
	
	<div class="col-sm-3 col-md-2">
          
  <h3 class="">Name</h3>
  <div id="left_menu">
  <nav>
    <ul class="nav nav-sidebar">
    <?php while($row = mysqli_fetch_assoc($result)) {?>
      <li class="active"><a href="?letter=<?php echo $_GET['letter'];?>&id=<?php echo $row["id"];?>"><?php echo $row["surename"]. " ".$row["first_name"];?></a></li>

      <?php }?>
    </ul>
  </nav>
  </div>
</div>
						
<?php    			
} //end of if (mysqli_num_rows($result) > 0) {
 
else {?>
<div class="col-sm-3 col-md-2">
          
  <h3 class="">Name</h3>
  <nav>
    <ul class="nav nav-sidebar">
      <li class="active"><?php echo "0 results";?></li>
    </ul>
  </nav>
</div>

<?php
}
}

	
	if (isset($_GET["id"])) {
		$row=display_query($_GET["id"]);
		if ($row != NULL) {
			
		$row["height"] = str_replace(".", "'", $row["height"]);?>
		<div class="mycontainer">
		<h2 class="title"><i>PERSONAL INFORMATION</i></h2>
		<div class="row align-items-start">
			<div class="col-md-6"><label class="" for="employee_id">EMPLOYEE ID #</label> <?php echo $row["id"]?></div>
		</div>
		<div class="row align-items-start">
			<div class="col-md-6"><label class="" for="surename">SURENAME </label><?php echo " ".$row["surename"];?></div>
		</div>

	<div class="row align-items-start">
		<div class="col-6 col-md-4"><label class="" for="first_name">FIRST NAME</label><?php echo $row["first_name"];?></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="middle_name">MIDDLE NAME</label><?php echo $row["middle_name"];?></div>
		<div class="col-md-6"><label class="" for="name_extention">NAME EXTENTION</label><?php echo $row["name_extention"];?></div>
	</div>
	
	
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="date_of_birth">DATE OF BIRTH</label><?php echo $row["date_of_birth"];?></div>
		<div class="col-md-6"><label class="" for="residential_address">RESIDENTIAL ADDRESS</label><?php echo $row["residential_address"];?></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="place_of_birth">PLACE OF BIRTH</label><?php echo $row["place_of_birth"];?></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="sex">SEX </label><?php echo $row["sex"];?></div>
		<div class="col-md-6"><label class="" for="residential_zip_code">ZIP CODE</label><?php echo $row["residential_zip_code"];?></div>
	</div>
	
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="civil_status">CIVIL STATUS</label><?php echo $row["civil_status"];?></div>
		<div class="col-md-6"><label class="" for="residential_telephone_no">TELEPHONE NO.</label><?php echo $row["residential_telephone_no"];?></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="citizenship">CITIZENSHIP</label><?php echo $row["citizenship"];?></div>
		<div class="col-md-6"><label class="" for="permanent_address">PERMANENT ADDRESS</label><?php echo $row["permanent_address"];?></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="height">HEIGHT</label><?php echo $row["height"];?></div>
		<div class="col-md-6"><label class="" for="perm_zip_code">ZIP CODE</label><?php echo $row["perm_address_zip_code"];?></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="weight">WEIGHT (kg)</label><?php echo $row["weight"];?></div>
		<div class="col-md-6"><label class="" for="perm_address_telephone_no ">TELEPHONE NO.</label><?php echo $row["perm_address_telephone_no"];?></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="blood_type">BLOOD TYPE</label><?php echo $row["blood_type"];?></div>
		<div class="col-md-6"><label class="" for="email_address">EMAIL ADDRESS (if any)</label><?php echo $row["email_address"];?></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="gsis_id_no">GSIS ID NO.</label><?php echo $row["gsis_id_no"];?></div>
		<div class="col-md-6"><label class="" for="cellphone_no">CELLPHONE NO. (if any)</label><?php echo $row["cellphone_number"];?></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="pagibig_id_no">PAG-IBIG ID NO.</label><?php echo $row["pagibig_id_no"];?></div>
		<div class="col-md-6"><label class="" for="agency_employee_no">AGENCY EMPLOYEE NO.</label><?php echo $row["agency_employee_no"];?></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="philhealth_no">PHILHEALTH NO.</label><?php echo $row["philhealth_no"];?></div>
		<div class="col-md-6"><label class="" for="tin">TIN</label><?php echo $row["tin"];?></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="sss_no">SSS NO.</label><?php echo $row["sss_no"];?></div>
		<div class="col-md-6"></div>
	</div>
	<h2 class="title"><i>FAMILY BACKGROUND</i></h2>
	<div class="row align-items-start">
		<div class="col-md-6"></div>
		<div class="col-md-4"><label class="" for="name_of_child">NAME OF CHILD (Write in full name and list all)</label><?php echo $row["name_of_child"];?></div>
		<div class="col-md-2"><label class="" for="child_date_of_birth">DATE OF BIRTH</label><?php echo $row["child_date_of_birth"];?></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="spouse_surename">SPOUSE'S SURENAME</label><?php echo $row["spouse_surename"];?></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="spouse_first_name">FIRST NAME</label><?php echo $row["spouse_first_name"];?></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="spouse_middle_name">MIDDLE NAME</label><?php echo $row["spouse_middle_name"];?></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="spouse_occupation">OCCUPATION</label><?php echo $row["spouse_occupation"];?></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="spouse_occupation">OCCUPATION</label><?php echo $row["spouse_occupation"];?></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="spouse_employer_name">EMPLOYER/BUS. NAME</label><?php echo $row["spouse_employer_name"];?></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="spouse_business_address">BUSINESS ADDRESS</label><?php echo $row["spouse_business_address"];?></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="spouse_tel_no">TELEPHONE NO.</label><?php echo $row["spouse_tel_no"];?></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="father_surename">FATHER'S SURENAME</label><?php echo $row["father_surename"];?></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="father_first_name">FIRST NAME</label><?php echo $row["father_first_name"];?></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="father_middle_name">MIDDLE NAME</label><?php echo $row["father_middle_name"];?></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="mother_surename">MOTHER'S MAIDEN NAME<br>SURENAME</label><?php echo $row["mother_surename"];?></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="mother_first_name">FIRST NAME</label><?php echo $row["mother_first_name"];?></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="mother_middle_name">MIDDLE NAME</label><?php echo $row["mother_middle_name"];?></div>
	</div>

	<h2 class="title"><i>EDUCATIONAL BACKGROUND</i></h2>
	
	<div class="row align-items-start">
		<div class="col-md-2">LEVEL</div>
		<div class="col-md-2">NAME OF SCHOOL (Write in full)</div>
		<div class="col-md-2">DEGREE COURSE (Write in full)</div>
		<div class="col-md-2">YEAR GRADUATED (if graduated)</div>
		<div class="col-md-4">HIGHEST GRADE/LEVEL/UNITS EARNED (if not graduate)</div>
	</div>
	<?php ////////////////////////////////////****************************************************************************************************///////////////////////////////////////?>
	<div class="row align-items-start">
		<div class="col-md-2"><label class="" for="elementary">ELEMENTARY</label></div>
		<div class="col-md-2"><input class="" type="text" name="name_school_elem" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="degree_course_elem" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="year_graduated_elem" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="highest_grade_elem" value=""></div>
	</div>
	<?php ////////////////////////////////////****************************************************************************************************///////////////////////////////////////?>
	
	<h2 class="title"><i>CIVIL SERVICE ELIGIBILITY</i></h2>
		<div class="row align-items-start">
			<div class="col-md-2">CAREER SERVICE/RA1080 (BOARD BAR) UNDER SPECIAL LAWS/ <br>CES /CSEE</div>
			<div class="col-sm-2">RATING</div>
			<div class="col-md-2">DATE OF <br>EXAMINATION/<br>CONFERMENT</div>
			<div class="col-md-2">PALCE OF EXAMINATION/<br>CONFERMENT</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row align-items-start">
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2"></div>
			<div class="col-md-2">LICENSE (if applicable)</div>
		</div>
		
		<div class="row align-items-start">
				<div class="col-md-2"></div>
				<div class="col-md-2"></div>
				<div class="col-md-2"></div>
				<div class="col-md-2"></div>
				<div class="col-md-2">NUMBER</div>
				<div class="col-md-2">DATE OF RELEASE</div>
		</div>

		<div class="row align-items-start">			
			<div class="col-md-2"><?php echo $row["career_service"];?></div>
			<div class="col-md-2"><?php echo $row["rating"];?></div>
			<div class="col-md-2"><?php echo $row["date_examination"];?></div>
			<div class="col-md-2"><?php echo $row["place_examination"];?></div>
			<div class="col-md-2"><?php echo $row["license_number"];?></div>
			<div class="col-md-2"><?php echo $row["license_date_release"];?></div>
		</div>

		<h2 class="title"><i>WORK EXPERIENCE</i></h2>
	<div class="row align-items-start">	
			<div class="col-md-2">INCLUSIVE DATES</div>
			<div class="col-md-2">POSITION TITLE<br>(Write in full)</div>
			<div class="col-md-2">DEPARTMENT/<br>AGENCY/OFFICE/<br>COMPANY<br>(Write in full)</div>
			<div class="col-md-2">MONTHLY<br>SALARY</div>
			<div class="col-md-2">SALARY GRADE & STEP INCREMENT</div>
			<div class="col-md-2">STATUS OF APPOINTMENT</div>
			<div class="col-md-2">GOV'T SERVICE</div>
	</div>
	<div class="row align-items-start">	
			<div class="col-md-1">From</div>
			<div class="col-md-1">To</div>
	</div>
	<div class="row align-items-start">	
			<div class="col-md-1"><?php echo $row["work_exp_inclusive_date_from"];?></div>
			<div class="col-md-1"><?php echo $row["work_exp_inclusive_date_to"];?></div>
			<div class="col-md-2"><?php echo $row["position_title"];?></div>
			<div class="col-md-2"><?php echo $row["department"];?></div>
			<div class="col-md-2"><?php echo $row["monthly_salary"];?></div>
			<div class="col-md-2"><?php echo $row["salary_grade"];?></div>
			<div class="col-md-2"><?php echo $row["status_of_appointment"];?></div>
			<div class="col-md-2"><?php echo $row["govt_service"];?></div>
		</div>

	<h4 class="title"><i> VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</i></h4>
	<div class="row align-items-start">
		<div class="col-md-3">NAME & ADDRESS OF ORGANIZATION<br>(Write in full)</div>
		<div class="col-md-4">INCLUSIVE DATES <br>(mm/dd/yyyy)</div>
		<div class="col-md-2">NUMBER OF HOURS</div>
		<div class="col-md-3">POSITION / NATURE <br>OF WORK</div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-3"></div>
		<div class="col-md-2">From</div>
		<div class="col-md-2">To</div>
		<div class="col-md-3"></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-3"><?php echo $row["name_organization"];?></div>
		<div class="col-md-2"><?php echo $row["voluntary_work_inclusive_dates_from"];?></div>
		<div class="col-md-2"><?php echo $row["voluntary_work_inclusive_dates_to"];?></div>
		<div class="col-md-2"><?php echo $row["voluntary_number_of_hours"];?></div>
		<div class="col-md-3"><?php echo $row["voluntary_position"];?></div>
	</div>

	<?php
		}
	}

?> 

</body>
</html>