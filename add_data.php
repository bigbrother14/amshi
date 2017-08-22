<?php
	include_once('function.php');
	if (isset($_POST['submit_data'])) {			
			$_POST['height'] = str_replace("'", ".", $_POST['height']); //change ' to . from height
			add_employee_data(
			$_POST['employee_id'],
			strtoupper($_POST['surename']),
			strtoupper($_POST['first_name']),
			strtoupper($_POST['middle_name']),
			strtoupper($_POST['name_extention']),
			$_POST['date_of_birth'],
			strtoupper($_POST['place_of_birth']),
			strtoupper($_POST['sex']),
			strtoupper($_POST['civil_status']),
			strtoupper($_POST['citizenship']),
			$_POST['height'],
			$_POST['weight'],
			strtoupper($_POST['blood_type']),
			$_POST['gsis_no_no'],
			$_POST['pagibig_id_no'],
			$_POST['philhealth_no'],
			$_POST['sss_no'],
			strtoupper($_POST['residential_address']),
			$_POST['residential_zip_code'],
			$_POST['residential_telephone_no'],
			strtoupper($_POST['permanent_address']),
			$_POST['perm_zip_code'],
			$_POST['perm_address_telephone_no'],
			$_POST['email_address'],
			$_POST['cellphone_no'],
			$_POST['agency_employee_no'],
			$_POST['tin'],
			strtoupper($_POST['spouse_surename']),
			strtoupper($_POST['spouse_first_name']),
			strtoupper($_POST['spouse_middle_name']),
			strtoupper($_POST['spouse_occupation']),
			strtoupper($_POST['spouse_employer_name']),
			strtoupper($_POST['spouse_business_address']),
			$_POST['spouse_tel_no'],
			strtoupper($_POST['name_of_child']),
			$_POST['child_date_of_birth'],
			strtoupper($_POST['father_surename']),
			strtoupper($_POST['father_first_name']),
			strtoupper($_POST['father_middle_name']),
			strtoupper($_POST['mother_surename']),
			strtoupper($_POST['mother_first_name']),
			strtoupper($_POST['mother_middle_name']),		
			strtoupper($_POST['elementary']),
			strtoupper($_POST['name_school_elem']),
			strtoupper($_POST['degree_course_elem']),
			strtoupper($_POST['year_graduated_elem']),
			strtoupper($_POST['highest_grade_elem']),
			strtoupper($_POST['secondary']),
			strtoupper($_POST['name_school_second']),
			strtoupper($_POST['degree_course_second']),
			strtoupper($_POST['year_graduated_second']),
			strtoupper($_POST['highest_grade_second']),
			strtoupper($_POST['vocational_trade']),
			strtoupper($_POST['name_school_voc_trade']),
			strtoupper($_POST['degree_course_voc_trade']),
			strtoupper($_POST['year_graduated_voc_trade']),
			strtoupper($_POST['highest_grade_voc_trade']),
			strtoupper($_POST['college']),
			strtoupper($_POST['name_school_college']),
			strtoupper($_POST['degree_course_college']),
			strtoupper($_POST['year_graduated_college']),
			strtoupper($_POST['highest_grade_college']),
			strtoupper($_POST['graduate_studies']),
			strtoupper($_POST['name_school_grad_studies']),
			strtoupper($_POST['degree_course_grad_studies']),
			strtoupper($_POST['year_graduated_grad_studies']),
			strtoupper($_POST['highest_grade_grad_studies']),
		

			strtoupper($_POST['career_service']),
			$_POST['rating'],
			$_POST['date_examination'],
			strtoupper($_POST['place_examination']),
			$_POST['license_number'],
			$_POST['license_date_release'],

			$_POST['work_exp_inclusive_dates_from'],
			$_POST['work_exp_inclusive_dates_to'],
			strtoupper($_POST['position_title']),
			strtoupper($_POST['department']),
			$_POST['monthly_salary'],
			$_POST['salary_grade'],
			strtoupper($_POST['status_of_appointment']),
			strtoupper($_POST['govt_service']),

			strtoupper($_POST['name_organization']),
			$_POST['voluntary_work_inclusive_dates_from'],
			$_POST['voluntary_work_inclusive_dates_to'],
			$_POST['voluntary_number_of_hours'],
			strtoupper($_POST['voluntary_position']),
			strtoupper($_POST['title_seminar']),
			$_POST['training_inclusive_dates_from'],
			$_POST['training_inclusive_dates_to'],
			$_POST['training_number_of_hours'],
			strtoupper($_POST['training_position']),
			strtoupper($_POST['special_skills']),
			strtoupper($_POST['non_academic_distinctions']),
			strtoupper($_POST['membership_in_assoc']));
	}
	if (isset($_GET['action'])) {
		activity($_GET['action']);
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<!--CSS -->
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
	<?php include('header.php');?>
	
	<form action="add_data.php" method="post">
		<div class="container">
	<h1 class="page-header">PERSONAL DATA SHEET</h1>
	<h2 class="title"><i>PERSONAL INFORMATION</i></h2>
	<div class="row">
		<div class="col-md-6">
	<label class="" for="employee_id">EMPLOYEE ID #</label>
	<input class="" type="number" name="employee_id" required>
	</div>
	</div>
	<div class="row">
		<div class="col-md-6"><label class="" for="surename">SURENAME</label><input class="" type="text" name="surename" id="surename"></div>
	</div>

	<div class="row">
		<div class="col-6 col-md-4"><label class="" for="first_name">FIRST NAME</label><input class="" type="text" name="first_name"></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="middle_name">MIDDLE NAME</label><input class="" type="text" name="middle_name"></div>
		<div class="col-md-6"><label class="" for="name_extention">NAME EXTENTION</label><input class="" type="text" name="name_extention"></div>
	</div>
	
	
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="date_of_birth">DATE OF BIRTH</label><input class="" type="date" name="date_of_birth"></div>
		<div class="col-md-6"><label class="" for="residential_address">RESIDENTIAL ADDRESS</label><input class="" type="text" name="residential_address"></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="place_of_birth">PLACE OF BIRTH</label><input class="" type="text" name="place_of_birth"></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="sex">SEX </label><input class="" type="radio" name="sex" value="male">Male<input class="" type="radio" name="sex" value="female">Female</div>
		<div class="col-md-6"><label class="" for="residential_zip_code">ZIP CODE</label><input class="" type="text" name="residential_zip_code"></div>
	</div>
	
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="civil_status">CIVIL STATUS</label><input class="" type="text" name="civil_status"></div>
		<div class="col-md-6"><label class="" for="residential_telephone_no">TELEPHONE NO.</label><input class="" type="text" name="residential_telephone_no"></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="citizenship">CITIZENSHIP</label><input class="" type="text" name="citizenship"></div>
		<div class="col-md-6"><label class="" for="permanent_address">PERMANENT ADDRESS</label><input class="" type="text" name="permanent_address"></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="height">HEIGHT</label><input class="" type="text" name="height"></div>
		<div class="col-md-6"><label class="" for="perm_zip_code">ZIP CODE</label><input class="" type="text" name="perm_zip_code"></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="weight">WEIGHT (kg)</label><input class="" type="text" name="weight"></div>
		<div class="col-md-6"><label class="" for="perm_address_telephone_no ">TELEPHONE NO.</label><input class="" type="text" name="perm_address_telephone_no"></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="blood_type">BLOOD TYPE</label><input class="" type="text" name="blood_type"></div>
		<div class="col-md-6"><label class="" for="email_address">EMAIL ADDRESS (if any)</label><input class="" type="text" name="email_address"></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="gsis_id_no">GSIS ID NO.</label><input class="" type="text" name="gsis_no_no"></div>
		<div class="col-md-6"><label class="" for="cellphone_no">CELLPHONE NO. (if any)</label><input class="" type="text" name="cellphone_no"></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="pagibig_id_no">PAG-IBIG ID NO.</label><input class="" type="text" name="pagibig_id_no"></div>
		<div class="col-md-6"><label class="" for="agency_employee_no">AGENCY EMPLOYEE NO.</label><input class="" type="text" name="agency_employee_no"></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="philhealth_no">PHILHEALTH NO.</label><input class="" type="text" name="philhealth_no"></div>
		<div class="col-md-6"><label class="" for="tin">TIN</label><input class="" type="text" name="tin"></div>
	</div>

	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="sss_no">SSS NO.</label><input class="" type="text" name="sss_no"></div>
		<div class="col-md-6"></div>
	</div>

	<h2 class="title"><i>FAMILY BACKGROUND</i></h2>
	<div class="row align-items-start">
		<div class="col-md-6"></div>
		<div class="col-md-4"><label class="" for="name_of_child">NAME OF CHILD (Write in full name and list all)</label><input class="" type="text" name="name_of_child"></div>
		<div class="col-md-2"><label class="" for="child_date_of_birth">DATE OF BIRTH</label><input class="" type="date" name="child_date_of_birth"></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="spouse_surename">SPOUSE'S SURENAME</label><input class="" type="text" name="spouse_surename"></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="spouse_first_name">FIRST NAME</label><input class="" type="text" name="spouse_first_name"></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="spouse_middle_name">MIDDLE NAME</label><input class="" type="text" name="spouse_middle_name"></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="spouse_occupation">OCCUPATION</label><input class="" type="text" name="spouse_occupation"></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="spouse_occupation">OCCUPATION</label><input class="" type="text" name="spouse_occupation"></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="spouse_employer_name">EMPLOYER/BUS. NAME</label><input class="" type="text" name="spouse_employer_name"></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="spouse_business_address">BUSINESS ADDRESS</label><input class="" type="text" name="spouse_business_address"></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="spouse_tel_no">TELEPHONE NO.</label><input class="" type="text" name="spouse_tel_no"></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="father_surename">FATHER'S SURENAME</label><input class="" type="text" name="father_surename"></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="father_first_name">FIRST NAME</label><input class="" type="text" name="father_first_name"></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="father_middle_name">MIDDLE NAME</label><input class="" type="text" name="father_middle_name"></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="mother_surename">MOTHER'S MAIDEN NAME<br>SURENAME</label><input class="" type="text" name="mother_surename"></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="mother_first_name">FIRST NAME</label><input class="" type="text" name="mother_first_name"></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-6"><label class="" for="mother_middle_name">MIDDLE NAME</label><input class="" type="text" name="mother_middle_name"></div>
	</div>

	<h2 class="title"><i>EDUCATIONAL BACKGROUND</i></h2>
	
	<div class="row align-items-start">
		<div class="col-md-2">LEVEL</div>
		<div class="col-md-2">NAME OF SCHOOL (Write in full)</div>
		<div class="col-md-2">DEGREE COURSE (Write in full)</div>
		<div class="col-md-2">YEAR GRADUATED (if graduated)</div>
		<div class="col-md-4">HIGHEST GRADE/LEVEL/UNITS EARNED (if not graduate)</div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-2"><label class="" for="elementary">ELEMENTARY</label><input class="" type="hidden" name="elementary" value="elementary"></div>
		<div class="col-md-2"><input class="" type="text" name="name_school_elem" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="degree_course_elem" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="year_graduated_elem" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="highest_grade_elem" value=""></div>
	</div>
	
	<div class="row align-items-start">
		<div class="col-md-2"><label class="" for="secondary">SECONDARY</label><input class="" type="hidden" name="secondary" value="secondary"></div>
		<div class="col-md-2"><input class="" type="text" name="name_school_second" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="degree_course_second" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="year_graduated_second" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="highest_grade_second" value=""></div>
	</div>
			
	<div class="row align-items-start">
		<div class="col-md-2"><label class="" for="vocational_trade">VOCATIONAL/TRADE COURSE</label><input class="" type="hidden" name="vocational_trade" value="vocational/trade course"></div>
		<div class="col-md-2"><input class="" type="text" name="name_school_voc_trade" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="degree_course_voc_trade" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="year_graduated_voc_trade" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="highest_grade_voc_trade" value=""></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-2"><label class="" for="college">COLLEGE</label><input class="" type="hidden" name="college" value="college"></div>
		<div class="col-md-2"><input class="" type="text" name="name_school_college" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="degree_course_college" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="year_graduated_college" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="highest_grade_college" value=""></div>
	</div>
	<div class="row align-items-start">
		<div class="col-md-2"><label class="" for="graduate_studies">GRADUATE STUDIES</label><input class="" type="hidden" name="graduate_studies" value="graduate studies"></div>
		<div class="col-md-2"><input class="" type="text" name="name_school_grad_studies" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="degree_course_grad_studies" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="year_graduated_grad_studies" value=""></div>
		<div class="col-md-2"><input class="" type="text" name="highest_grade_grad_studies" value=""></div>
	</div>
	
			
			


	<h2 class="title"><i>CIVIL SERVICE ELIGIBILITY</i></h2>
		<div class="row align-items-start">
			<div class="col-md-2">CAREER SERVICE/RA1080 (BOARD BAR) UNDER SPECIAL LAWS/ <br>CES /CSEE</div>
			<div class="col-sm-2">RATING</div>
			<div class="col-md-2">DATE OF <br>EXAMINATION/<br>CONFERMENT</div>
			<div class="col-md-2">PALCE OF EXAMINATION/<br>CONFERMENT</div>
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
			<div class="col-md-2"><input type="text" name="career_service"></div>
			<div class="col-md-2"><input type="text" name="rating"></div>
			<div class="col-md-2"><input type="date" name="date_examination"></div>
			<div class="col-md-2"><input type="text" name="place_examination"></div>
			<div class="col-md-2"><input type="text" name="license_number"></div>
			<div class="col-md-2"><input type="date" name="license_date_release"></div>
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
			<div class="col-md-1"><input type="date" name="work_exp_inclusive_dates_from" class="input_date"></div>
			<div class="col-md-1"><input type="date" name="work_exp_inclusive_dates_to" class="input_date"></div>
			<div class="col-md-2"><input type="text" name="position_title"></div>
			<div class="col-md-2"><input type="text" name="department"></div>
			<div class="col-md-2"><input type="text" name="monthly_salary"></div>
			<div class="col-md-2"><input type="text" name="salary_grade"></div>
			<div class="col-md-2"><input type="text" name="status_of_appointment"></div>
			<div class="col-md-2"><input type="text" name="govt_service"></div>
		</div>

	<h4 class="title"><i> VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</i></h4>
	<table>
		<tr>
			<th>NAME & ADDRESS OF ORGANIZATION<br>(Write in full)</th>
			<th>INCLUSIVE DATES <br>(mm/dd/yyyy)
				<table>
					<tr>
						<td>From</td>
						<td>To</td>
					</tr>
				</table>
			</th>
			<th>NUMBER OF HOURS</th>
			<th>POSITION / NATURE OF WORK</th>
		</tr>
		<tr>
			<td><input type="text" name="name_organization"></td>
			<td><input type="date" name="voluntary_work_inclusive_dates_from">
			<input type="date" name="voluntary_work_inclusive_dates_to"></td>
			<td><input type="text" name="voluntary_number_of_hours"></td>
			<td><input type="text" name="voluntary_position"></td>
			
		</tr>

	</table>

	<h2 class="title"><i>TRAINING PROGRAMS (Start from the most recent training)</i></h2>
	<table>
		<tr>
			<th>TITLE OF SEMINAR/CONFERENCE/WORKSHOP/SHORT COURSES <br>(Write in full)</th>
			<th>INCLUSIVE DATES OF ATTENDANCE <br>(mm/dd/yyyy)
			<table>
				<td>From</td>
				<td>To</td>
			</table>	
			</th>
			<th>NUMBER OF HOURS</th>
			<th>	CONDUCTED / SPONSORED BY <br>(Write in full)</th>
		</tr>
		<tr>
			<td><input type="text" name="title_seminar"></td>
			<td><input type="date" name="training_inclusive_dates_from">
			<input type="date" name="training_inclusive_dates_to"></td>
			<td><input type="text" name="training_number_of_hours"></td>
			<td><input type="text" name="training_position"></td>
		</tr>
	</table>

	<h2 class="title"><i>OTHER INFORMATION</i></h2>
	<table>
		<tr>
			<th>SPECIAL SKILLS / HOBBIES</th>
			<th>NON-ACADEMIC DISTINCTIONS / RECOGNITION<br>(Write in full)</th>
			<th>MEMBERSHIP IN ASSOCIATION/ORGANIZATION<br>(Write in full)</th>
		</tr>
		<tr>
			<td><input type="text" name="special_skills"></td>
			<td><input type="text" name="non_academic_distinctions"></td>
			<td><input type="text" name="membership_in_assoc"></td>
		</tr>
	</table>
	<button class="btn btn-default" type="submit" name="submit_data">SAVE</button>
</div>
	</form>
	

</body>
</html>