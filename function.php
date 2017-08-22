<?php
function connection(){
	$user = "jesrel";
	$pass = "jes123";
	$dbhost = "localhost";
	$database = "amshi_hr";

	
	$con = mysqli_connect($dbhost, $user, $pass, $database);
  	return $con;
}
function activity($action){
	switch ($action) {
		case 'add_employee_data':
			header('location:add_data.php');
			break;
		case 'display_data':
			header('location:display.php');
			break;
		case 'logout':
			logout();
			break;
		default:
			# code...
			break;
	}
}

function user_auth($username, $password){
	$con = connection();
	$sql = "SELECT * FROM hruser WHERE username='$username' AND password='$password'";
	$result = mysqli_query($con, $sql);

	
	$numofrows = mysqli_num_rows($result);
	if ($numofrows == 1) {
		$_SESSION['username'] = $username;
	}
	if (isset($_SESSION['username']) == $username) {
		header('location:home.php');
	}

	mysqli_close($con);
}

function logout(){
	session_destroy();
	header('location:index.php');
}
function check_employee_id($id){
	$result = false;
	$con = connection();
	$sql = "SELECT personal_information.id FROM personal_information WHERE id='$id'";
	$query = mysqli_query($con,$sql);
	$numofrows = mysqli_num_rows($query);
	if ($numofrows == 1) {
		return $result = true;
	}
	return $result;
}

function add_employee_data($id,$surename, $first_name, $middle_name, $name_extention, $date_of_birth, $place_of_birth, $sex, $civil_status, $citizenship, $height, $weight, $blood_type, $gsis_id_no, $pagibig_id_no, $philhealth_no, $sss_no, 
	$residential_address, $residential_zip_code, $residential_telephone_no, $permanent_address, $perm_address_zip_code, $perm_address_telephone_no, $email_address, $cellphone_number, $agency_employee_no, $tin, $spouse_surename,
	$spouse_first_name, $spouse_middle_name, $spouse_occupation, $spouse_employer_name, $spouse_business_address, $spouse_tel_no, $name_of_child, $child_date_of_birth, $father_surename, $father_first_name, $father_middle_name,
	$mother_surename, $mother_first_name, $mother_middle_name, $elementary,$name_school_elem, $degree_course_elem, $year_graduated_elem, $highest_grade_elem, $secondary, $name_school_second, $degree_course_second, $year_graduated_second, $highest_grade_second,
	$vocational_trade, $name_school_voc_trade, $degree_course_voc_trade, $year_graduated_voc_trade, $highest_grade_voc_trade, $college, $name_school_college, $degree_course_college, $year_graduated_college, $highest_grade_college, 
	$graduate_studies, $name_school_grad_studies, $degree_course_grad_studies, $year_graduated_grad_studies, $highest_grade_grad_studies,
	$career_service, $rating, $date_examination, $place_examination, $license_number, $license_date_release, $work_exp_inclusive_dates_from, $work_exp_inclusive_dates_to, $position_title, $department, $monthly_salary, $salary_grade,
	$status_of_appointment, $govt_service,$name_organization, $voluntary_work_inclusive_dates_from, $voluntary_work_inclusive_dates_to, $voluntary_number_of_hours, $voluntary_position,
	$title_seminar, $training_inclusive_dates_from, $training_inclusive_dates_to, $training_number_of_hours, $conducted, $special_skills, $non_academic_distinctions, $membership_in_assoc){
	
	$fullname = $first_name ." ". $middle_name ." ". $surename ." ". $name_extention;
	$level = $elementary ."?". $secondary ."?". $vocational_trade ."?". $college  ."?".$graduate_studies;
	$name_of_school = $name_school_elem ."?". $name_school_second ."?". $name_school_voc_trade ."?". $name_school_college ."?". $name_school_grad_studies;
	$degree_course = $degree_course_elem ."?". $degree_course_second ."?". $degree_course_voc_trade ."?". $degree_course_college ."?". $degree_course_grad_studies;
	$year_graduated = $year_graduated_elem ."?". $year_graduated_second ."?". $year_graduated_voc_trade ."?". $year_graduated_college ."?". $year_graduated_grad_studies;
	$highest_grade_level = $highest_grade_elem ."?". $highest_grade_second ."?". $highest_grade_voc_trade ."?". $highest_grade_college ."?". $highest_grade_grad_studies;
	
	$today = time();
	$date = date("Y-m-d",$today);

	$con = connection();
	if(check_employee_id($id) == false){
		$sql = "INSERT INTO `personal_information`(`id`,`fullname`,`surename`, `first_name`, `middle_name`, `name_extention`, `date_of_birth`, `place_of_birth`, `sex`, `civil_status`, 
												`citizenship`, `height`, `weight`, `blood_type`, `gsis_id_no`, `pagibig_id_no`, `philhealth_no`, `sss_no`, `residential_address`, `residential_zip_code`, 
												`residential_telephone_no`, `permanent_address`, `perm_address_zip_code`, `perm_address_telephone_no`, `email_address`, `cellphone_number`, `agency_employee_no`, 
												`tin`) VALUES('$id','$fullname', '$surename', '$first_name', '$middle_name', '$name_extention', '$date_of_birth', '$place_of_birth', '$sex', '$civil_status', 
												'$citizenship', '$height', '$weight', '$blood_type', '$gsis_id_no', '$pagibig_id_no', '$philhealth_no', '$sss_no', '$residential_address', '$residential_zip_code', 
												'$residential_telephone_no', '$permanent_address', '$perm_address_zip_code', '$perm_address_telephone_no', '$email_address', '$cellphone_number', '$agency_employee_no', '$tin')";
	#mysqli_query($query,$con);
		if (mysqli_query($con,$sql)) {

			$sql = "INSERT INTO `family_background`(`spouse_surename`, `spouse_first_name`, `spouse_middle_name`, `spouse_occupation`, `spouse_employer_name`, `spouse_business_address`, `spouse_tel_no`, `name_of_child`, 
					`child_date_of_birth`, `father_surename`, `father_first_name`, `father_middle_name`, `mother_surename`, `mother_first_name`, `mother_middle_name`, `id`) 
					VALUES ('$spouse_surename', '$spouse_first_name', '$spouse_middle_name', '$spouse_occupation', '$spouse_employer_name', '$spouse_business_address', '$spouse_tel_no', '$name_of_child', '$child_date_of_birth',
						'$father_surename', '$father_first_name', '$father_middle_name', '$mother_surename', '$mother_first_name', '$mother_middle_name','$id')";
			mysqli_query($con,$sql);
			$sql = "INSERT INTO `educational_background`(`level`, `name_of_school`, `degree_course`, `year_graduated`, `highest_grade_level`, `id`)
					VALUES ('$level', '$name_of_school', '$degree_course', '$year_graduated', '$highest_grade_level', '$id')";
			mysqli_query($con,$sql);
			$sql = "INSERT INTO `civil_service_eligibility` (`career_service`, `rating`, `date_examination`, `place_examination`, `license_number`, `license_date_release`, `id`) 
					VALUES ('$career_service', '$rating', '$date_examination', '$place_examination', '$license_number', '$license_date_release', '$id');"; 
			mysqli_query($con,$sql);
			
	 		$sql = "INSERT INTO `work_experience`(`work_exp_inclusive_date_from`, `work_exp_inclusive_date_to`, `position_title`, `department`, `monthly_salary`, `salary_grade`, `status_of_appointment`, `govt_service`, `id`) 
	 		 		VALUES ('$work_exp_inclusive_dates_from', '$work_exp_inclusive_dates_to', '$position_title', '$department', '$monthly_salary', '$salary_grade', '$status_of_appointment', '$govt_service','$id')";
	 		mysqli_query($con,$sql);

	 		$sql = "INSERT INTO `voluntary_work`(`name_organization`, `voluntary_work_inclusive_dates_from`, `voluntary_work_inclusive_dates_to`, `voluntary_number_of_hours`, `voluntary_position`, `id`) 
	 				VALUES ('$name_organization', '$voluntary_work_inclusive_dates_from', '$voluntary_work_inclusive_dates_to', '$voluntary_number_of_hours', '$voluntary_position', '$id')";
		 	mysqli_query($con,$sql);

	 		$sql = "INSERT INTO `training_programs`(`title_seminar`, `training_inclusive_dates_attendance_from`, `training_inclusive_dates_attendance_to`, `training_number_of_hours`, `conducted`, `id`) 
	 				VALUES ('$title_seminar', '$training_inclusive_dates_from', '$training_inclusive_dates_to', '$training_number_of_hours', '$conducted', '$id')";
	 		mysqli_query($con,$sql);
	 		$sql = "INSERT INTO `other_information`(`special_skills`, `non_academic_distinctions`, `membership_in_assoc`, `id`) VALUES ('$special_skills', '$non_academic_distinctions', '$membership_in_assoc','$id')";
	 		mysqli_query($con,$sql);
	 		$sql = "INSERT INTO `registration_date`(`registration_date`, `id`) VALUES ('$date','$id')";
			mysqli_query($con,$sql);
		}
		else{
			//echo "error";
			echo "<br>" . "Error: " . $sql . "<br>" . mysqli_error($con);
		
		}
	}
	else{
		echo "Existing";
	}


	mysqli_close($con);
}
function search_employee_name($name){

}

function display_query($id){
	$con = connection();

	$sql = "SELECT * FROM `personal_information`,`educational_background`,`civil_service_eligibility`,`family_background`,`other_information`,`registration_date`,`training_programs`,`voluntary_work`,`work_experience` WHERE personal_information.id='$id' AND educational_background.id=personal_information.id AND civil_service_eligibility.id=personal_information.id AND family_background.id=personal_information.id AND other_information.id=personal_information.id AND registration_date.id=personal_information.id AND training_programs.id=personal_information.id AND voluntary_work.id=personal_information.id AND work_experience.id=personal_information.id";
	//$sql = "SELECT personal_information.surename,educational_background.level, educational_background.name_of_school FROM `personal_information`,educational_background WHERE personal_information.id='$id' AND educational_background.id = personal_information.id";
	//$sql = "SELECT * FROM personal_information,educational_background WHERE personal_information.id='$id' AND educational_background.id = personal_information.id";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	//echo $row["registration_date"]." ".$row["middle_name"];
	return $row;
}


?>
