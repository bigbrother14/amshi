<?php
include_once('function.php');
session_start();
if(isset($_SESSION['username'])){
	echo $_SESSION['username'];
}
if (isset($_POST['submit_data'])) {
		add_employee_data(
			$_POST['employee_id'],
			$_POST['surename'],
			$_POST['first_name'],
			$_POST['middle_name'],
			$_POST['name_extention'],
			$_POST['date_of_birth'],
			$_POST['place_of_birth'],
			$_POST['sex'],
			$_POST['civil_status'],
			$_POST['citizenship'],
			$_POST['height'],
			$_POST['weight'],
			$_POST['blood_type'],
			$_POST['gsis_no_no'],
			$_POST['pagibig_id_no'],
			$_POST['philhealth_no'],
			$_POST['sss_no'],
			$_POST['residential_address'],
			$_POST['residential_zip_code'],
			$_POST['residential_telephone_no'],
			$_POST['permanent_address'],
			$_POST['perm_zip_code'],
			$_POST['perm_address_telephone_no'],
			$_POST['email_address'],
			$_POST['cellphone_no'],
			$_POST['agency_employee_no'],
			$_POST['tin'],
			$_POST['spouse_surename'],
			$_POST['spouse_first_name'],
			$_POST['spouse_middle_name'],
			$_POST['spouse_occupation'],
			$_POST['spouse_employer_name'],
			$_POST['spouse_business_address'],
			$_POST['spouse_tel_no'],
			$_POST['name_of_child'],
			$_POST['child_date_of_birth'],
			$_POST['father_surename'],
			$_POST['father_first_name'],
			$_POST['father_middle_name'],
			$_POST['mother_surename'],
			$_POST['mother_first_name'],
			$_POST['mother_middle_name'],		
			$_POST['elementary'],
			$_POST['name_school_elem'],
			$_POST['degree_course_elem'],
			$_POST['year_graduated_elem'],
			$_POST['highest_grade_elem'],
			$_POST['inclusive_date_from_elem'],
			$_POST['inclusive_date_to_elem'],
			$_POST['scholarship_elem'],			
			$_POST['secondary'],
			$_POST['name_school_second'],
			$_POST['degree_course_second'],
			$_POST['year_graduated_second'],
			$_POST['highest_grade_second'],
			$_POST['inclusive_date_from_second'],
			$_POST['inclusive_date_to_second'],
			$_POST['scholarship_second'],
			$_POST['vocational_trade'],
			$_POST['name_school_voc_trade'],
			$_POST['degree_course_voc_trade'],
			$_POST['year_graduated_voc_trade'],
			$_POST['highest_grade_voc_trade'],
			$_POST['inclusive_date_from_voc_trade'],
			$_POST['inclusive_date_to_voc_trade'],
			$_POST['scholarship_voc_trade'],
			$_POST['college'],
			$_POST['name_school_college'],
			$_POST['degree_course_college'],
			$_POST['year_graduated_college'],
			$_POST['highest_grade_college'],
			$_POST['inclusive_date_from_college'],
			$_POST['inclusive_date_to_college'],
			$_POST['scholarship_college'],
			$_POST['graduate_studies'],
			$_POST['name_school_grad_studies'],
			$_POST['degree_course_grad_studies'],
			$_POST['year_graduated_grad_studies'],
			$_POST['highest_grade_grad_studies'],
			$_POST['inclusive_date_from_grad_studies'],
			$_POST['inclusive_date_to_grad_studies'],
			$_POST['scholarship_grad_studies'],

			$_POST['career_service'],
			$_POST['rating'],
			$_POST['date_examination'],
			$_POST['place_examination'],
			$_POST['license_number'],
			$_POST['license_date_release'],

			$_POST['work_exp_inclusive_dates_from'],
			$_POST['work_exp_inclusive_dates_to'],
			$_POST['position_title'],
			$_POST['department'],
			$_POST['monthly_salary'],
			$_POST['salary_grade'],
			$_POST['status_of_appointment'],
			$_POST['govt_service'],

			$_POST['name_organization'],
			$_POST['voluntary_work_inclusive_dates_from'],
			$_POST['voluntary_work_inclusive_dates_to'],
			$_POST['number_of_hours'],
			$_POST['position'],
			$_POST['title_seminar'],
			$_POST['training_inclusive_dates_from'],
			$_POST['training_inclusive_dates_to'],
			$_POST['number_of_hours'],
			$_POST['position'],
			$_POST['special_skills'],
			$_POST['non_academic_distinctions'],
			$_POST['membership_in_assoc']);
	}
	if (isset($_GET['action'])) {
		activity($_GET['action']);
	}

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
table ,th,td{
    border: 1px solid black;
}
</style>
</head>
<body>

<form class="" action="add_data.php" method="post">
<h1>I. PERSONAL INFORMATION</h1>
<label class="" for="employee_id">EMPLOYEE ID #</label>
<input class="" type="number" name="employee_id" required>
<br>
<label class="" for="surename">SURENAME</label>
<input class="" type="text" name="surename">
<br>
<label class="" for="first_name">FIRST NAME</label>
<input class="" type="text" name="first_name">
<br>
<label class="" for="middle_name">MIDDLE NAME</label>
<input class="" type="text" name="middle_name">
<br>
<label class="" for="name_extention">NAME EXTENTION</label>
<input class="" type="text" name="name_extention">
<br>
<label class="" for="date_of_birth">DATE OF BIRTH</label>
<input class="" type="date" name="date_of_birth">
<br>
<label class="" for="place_of_birth">PLACE OF BIRTH</label>
<input class="" type="text" name="place_of_birth">
<br>
<label class="" for="sex">SEX</label>
<input class="" type="text" name="sex">
<br>
<label class="" for="civil_status">CIVIL STATUS</label>
<input class="" type="text" name="civil_status">
<br>
<label class="" for="citizenship">CITIZENSHIP</label>
<input class="" type="text" name="citizenship">
<br>
<label class="" for="height">HEIGHT</label>
<input class="" type="text" name="height">
<br>
<label class="" for="weight">WEIGHT</label>
<input class="" type="text" name="weight">
<br>
<label class="" for="blood_type">BLOOD TYPE</label>
<input class="" type="text" name="blood_type">
<br>
<label class="" for="gsis_id_no">GSIS ID NO.</label>
<input class="" type="text" name="gsis_no_no">
<br>
<label class="" for="pagibig_id_no">PAG-IBIG ID NO.</label>
<input class="" type="text" name="pagibig_id_no">
<br>
<label class="" for="philhealth_no">PHILHEALTH NO.</label>
<input class="" type="text" name="philhealth_no">
<br>
<label class="" for="sss_no">SSS NO.</label>
<input class="" type="text" name="sss_no">
<br>
<label class="" for="residential_address">RESIDENTIAL ADDRESS</label>
<input class="" type="text" name="residential_address">
<br>
<label class="" for="residential_zip_code">ZIP CODE</label>
<input class="" type="text" name="residential_zip_code">
<br>
<label class="" for="residential_telephone_no">TELEPHONE NO.</label>
<input class="" type="text" name="residential_telephone_no">
<br>
<label class="" for="permanent_address">PERMANENT ADDRESS</label>
<input class="" type="text" name="permanent_address">
<br>
<label class="" for="perm_zip_code">ZIP CODE</label>
<input class="" type="text" name="perm_zip_code">
<br>
<label class="" for="perm_address_telephone_no ">TELEPHONE NO.</label>
<input class="" type="text" name="perm_address_telephone_no">
<br>
<label class="" for="email_address">EMAIL ADDRESS (if any)</label>
<input class="" type="text" name="email_address">
<br>
<label class="" for="cellphone_no">CELLPHONE NO. (if any)</label>
<input class="" type="text" name="cellphone_no">
<br>
<label class="" for="agency_employee_no">AGENCY EMPLOYEE NO.</label>
<input class="" type="text" name="agency_employee_no">
<br>
<label class="" for="tin">TIN</label>
<input class="" type="text" name="tin">
<br>

<h1>II. FAMILY BACKGROUND</h1>
<br>
<label class="" for="name_of_child">NAME OF CHILD (Write in full name and list all)</label>
<input class="" type="text" name="name_of_child">
<br>
<label class="" for="child_date_of_birth">DATE OF BIRTH</label>
<input class="" type="text" name="child_date_of_birth">
<br>
<label class="" for="spouse_surename">SPOUSES SURENAME</label>
<input class="" type="text" name="spouse_surename">
<br>
<label class="" for="spouse_first_name">FIRST NAME</label>
<input class="" type="text" name="spouse_first_name">
<br>
<label class="" for="spouse_middle_name">MIDDLE NAME</label>
<input class="" type="text" name="spouse_middle_name">
<br>
<label class="" for="spouse_occupation">OCCUPATION</label>
<input class="" type="text" name="spouse_occupation">
<br>
<label class="" for="spouse_employer_name">EMPLOYER/BUS. NAME</label>
<input class="" type="text" name="spouse_employer_name">
<br>
<label class="" for="spouse_business_address">BUSINESS ADDRESS</label>
<input class="" type="text" name="spouse_business_address">
<br>
<label class="" for="spouse_tel_no">TELEPHONE NO.</label>
<input class="" type="text" name="spouse_tel_no">
<br>
<label class="" for="father_surename">FATHER'S SURENAME</label>
<input class="" type="text" name="father_surename">
<br>
<label class="" for="father_first_name">FIRST NAME</label>
<input class="" type="text" name="father_first_name">
<br>
<label class="" for="father_middle_name">MIDDLE NAME</label>
<input class="" type="text" name="father_middle_name">
<br>
<label class="" for="mother_surename">MOTHER'S MAIDEN NAME<br>SURENAME</label>
<input class="" type="text" name="mother_surename">
<br>
<label class="" for="mother_first_name">FIRST NAME</label>
<input class="" type="text" name="mother_first_name">
<br>
<label class="" for="mother_middle_name">MIDDLE NAME</label>
<input class="" type="text" name="mother_middle_name">



<h1>III. EDUCATIONAL BACKGROUND</h1>
<table>
	<tr>
		<th>LEVEL</th>
		<th>NAME OF SCHOOL (Write in full)</th>
		<th>DEGREE COURSE (Write in full)</th>
		<th>YEAR GRADUATED (if graduated)</th>
		<th>HIGHEST GRADE/LEVEL/UNITS EARNED (if not graduate)</th>
		<th>INCLUSIVE DATES OF ATTENDANCE
		<table>
			<tr>
			<td>From</td>
			<td>To</td>
			</tr>
		</table>
		</th>
		<th>SCHOLARSHIP/ACADEMIC HONORS RECEIVED</th>
	</tr>
	<tr>
		<td><label class="" for="elementary">ELEMENTARY</label><input class="" type="hidden" name="elementary" value="elementary"></td>
		<td><input class="" type="text" name="name_school_elem" value=""></td>
		<td><input class="" type="text" name="degree_course_elem" value=""></td>
		<td><input class="" type="text" name="year_graduated_elem" value=""></td>
		<td><input class="" type="text" name="highest_grade_elem" value=""></td>
		<td><input class="" type="month" name="inclusive_date_from_elem" value="">
		<input class="" type="month" name="inclusive_date_to_elem" value=""></td>
		<td><input class="" type="text" name="scholarship_elem" value=""></td>
	</tr>
	<tr>
		<td><label class="" for="secondary">SECONDARY</label><input class="" type="hidden" name="secondary" value="secondary"></td>
		<td><input class="" type="text" name="name_school_second" value=""></td>
		<td><input class="" type="text" name="degree_course_second" value=""></td>
		<td><input class="" type="text" name="year_graduated_second" value=""></td>
		<td><input class="" type="text" name="highest_grade_second" value=""></td>
		<td><input class="" type="month" name="inclusive_date_from_second" value="">
		<input class="" type="month" name="inclusive_date_to_second" value=""></td>
		<td><input class="" type="text" name="scholarship_second" value=""></td>
	</tr>
	<tr>
		<td><label class="" for="vocational_trade">VOCATIONAL/TRADE COURSE</label><input class="" type="hidden" name="vocational_trade" value="vocational/trade course"></td>
		<td><input class="" type="text" name="name_school_voc_trade" value=""></td>
		<td><input class="" type="text" name="degree_course_voc_trade" value=""></td>
		<td><input class="" type="text" name="year_graduated_voc_trade" value=""></td>
		<td><input class="" type="text" name="highest_grade_voc_trade" value=""></td>
		<td><input class="" type="month" name="inclusive_date_from_voc_trade" value="">
		<input class="" type="month" name="inclusive_date_to_voc_trade" value=""></td>
		<td><input class="" type="text" name="scholarship_voc_trade" value=""></td>
	</tr>
	<tr>
		<td><label class="" for="college">COLLEGE</label><input class="" type="hidden" name="college" value="college"></td>
		<td><input class="" type="text" name="name_school_college" value=""></td>
		<td><input class="" type="text" name="degree_course_college" value=""></td>
		<td><input class="" type="text" name="year_graduated_college" value=""></td>
		<td><input class="" type="text" name="highest_grade_college" value=""></td>
		<td><input class="" type="month" name="inclusive_date_from_college" value="">
		<input class="" type="month" name="inclusive_date_to_college" value=""></td>
		<td><input class="" type="text" name="scholarship_college" value=""></td>
	</tr>
	<tr>
		<td><label class="" for="graduate_studies">GRADUATE STUDIES</label><input class="" type="hidden" name="graduate_studies" value="graduate studies"></td>
		<td><input class="" type="text" name="name_school_grad_studies" value=""></td>
		<td><input class="" type="text" name="degree_course_grad_studies" value=""></td>
		<td><input class="" type="text" name="year_graduated_grad_studies" value=""></td>
		<td><input class="" type="text" name="highest_grade_grad_studies" value=""></td>
		<td><input class="" type="month" name="inclusive_date_from_grad_studies" value="">
		<input class="" type="month" name="inclusive_date_to_grad_studies" value=""></td>
		<td><input class="" type="text" name="scholarship_grad_studies" value=""></td>
	</tr>
</table>

<h1>IV. CIVIL SERVICE ELIGIBILITY</h1>
<table>
	<tr>
		<th>CAREER SERVICE/RA1080 (BOARD BAR)<br>UNDER SPECIAL LAWS/ CES /CSEE</th>
		<th>RATING</th>
		<th>DATE OF EXAMINATION/CONFERMENT</th>
		<th>PALCE OF EXAMINATION/CONFERMENT</th>
		<th>LICENSE (if applicable)
		<table>
			<td>NUMBER</td>
			<td>DATE OF RELEASE</td>
		</table>
		</th>
	</tr>
	<tr>
		<td><input type="text" name="career_service"></td>
		<td><input type="text" name="rating"></td>
		<td><input type="date" name="date_examination"></td>
		<td><input type="text" name="place_examination"></td>
		<td><input type="text" name="license_number">
		<input type="date" name="license_date_release"></td>
	</tr>
</table>

<h1>V. WORK EXPERIENCE</h1>
<table>
	<tr>
		<th>INCLUSIVE DATES
			<table>
				<td>From</td>
				<td>To</td>
			</table>
		</th>
		<th>POSITION TITLE (Write in full)</th>
		<th>DEPARTMENT/AGENCY/OFFICE/COMPANY (Write in full)</th>
		<th>MONTHLY SALARY</th>
		<th>SALARY GRADE & STEP INCREMENT</th>
		<th>STATUS OF APPOINTMENT</th>
		<th>GOV'T SERVICE</th>
	</tr>
	<tr>
		<td><input type="date" name="work_exp_inclusive_dates_from">
		<input type="date" name="work_exp_inclusive_dates_to"></td>
		<td><input type="text" name="position_title"></td>
		<td><input type="text" name="department"></td>
		<td><input type="text" name="monthly_salary"></td>
		<td><input type="text" name="salary_grade"></td>
		<td><input type="text" name="status_of_appointment"></td>
		<td><input type="text" name="govt_service"></td>
	</tr>
</table>

<h1>VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S</h1>
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
		<td><input type="text" name="number_of_hours"></td>
		<td><input type="text" name="position"></td>
		
	</tr>

</table>

<h1>VII. TRAINING PROGRAMS (Start from the most recent training)</h1>
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
		<th>CONDUCTED / SPONSORED BY <br>(Write in full)</th>
	</tr>
	<tr>
		<td><input type="text" name="title_seminar"></td>
		<td><input type="date" name="training_inclusive_dates_from">
		<input type="date" name="training_inclusive_dates_to"></td>
		<td><input type="text" name="number_of_hours"></td>
		<td><input type="text" name="position"></td>
	</tr>
</table>

<h1>VIII. OTHER INFORMATION</h1>
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
<button class="" type="submit" name="submit_data"> Submit </button>

</form>
<a href="?action=logout">Logout</a>
</body>
</html>