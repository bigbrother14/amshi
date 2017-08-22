
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="include/bootstrap/css/bootstrap.min.css">
	<link href="include/style.css" rel="stylesheet">
	<style type="text/css">body{padding-top: 60px;}</style>
	<!--Javascript-->
	<script src="include/bootstrap/js/bootstrap.min.js"></script>
	<script src="include/bootstrap/js/jquery.min.js"></script>
</head>
<body>
	<div class="container"><?php
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
			$_SESSION['curr_letter']= $_GET['letter'];
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
  <nav>
    <ul class="nav nav-sidebar">
    <?php while($row = mysqli_fetch_assoc($result)) {?>
      <li class="active"><a href="?id=<?php echo $row["id"];?>"><?php echo $row["first_name"]. " ".$row["middle_name"]. " ". $row["surename"]. " ". $row["name_extention"];?></a></li>
      <?php }?>
    </ul>
  </nav>
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
			echo "<div class=\"container\">";
	echo "<div class=\"panel panel-default\">";
	echo "<div class=\"panel-body\">";
			$row["height"] = str_replace(".", "'", $row["height"]);
			echo $row["id"]."<br>".$row["registration_date"]."<br>".$row["surename"]."<br>". $row["first_name"]."<br>". $row["middle_name"]."<br>". $row["name_extention"]."<br>". $row["date_of_birth"]."<br>". $row["place_of_birth"]."<br>". $row["sex"]."<br>". $row["civil_status"]."<br>". $row["citizenship"]."<br>". $row["height"]."<br>". $row["weight"]."<br>". $row["blood_type"]."<br>". $row["gsis_id_no"]."<br>". $row["pagibig_id_no"]."<br>". $row["philhealth_no"]."<br>". $row["sss_no"]."<br>". 
				$row["residential_address"]."<br>". $row["residential_zip_code"]."<br>". $row["residential_telephone_no"]."<br>". $row["permanent_address"]."<br>". $row["perm_address_zip_code"]."<br>". $row["perm_address_telephone_no"]."<br>". $row["email_address"]."<br>". $row["cellphone_number"]."<br>". $row["agency_employee_no"]."<br>". $row["tin"]."<br>". $row["spouse_surename"]."<br>".
				$row["spouse_first_name"]."<br>". $row["spouse_middle_name"]."<br>". $row["spouse_occupation"]."<br>". $row["spouse_employer_name"]."<br>". $row["spouse_business_address"]."<br>". $row["spouse_tel_no"]."<br>". $row["name_of_child"]."<br>". $row["child_date_of_birth"]."<br>". $row["father_surename"]."<br>". $row["father_first_name"]."<br>". $row["father_middle_name"]."<br>".
				$row["mother_surename"]."<br>". $row["mother_first_name"]."<br>". $row["mother_middle_name"]."<br>". $row["level"]. "<br>" . $row["name_of_school"]. "<br>". $row["degree_course"]. "<br>". $row["year_graduated"]. "<br>".
				$row["highest_grade_level"]. "<br>" .
				$row["career_service"]."<br>". $row["rating"]."<br>". $row["date_examination"]."<br>". $row["place_examination"]."<br>". $row["license_number"]."<br>". $row["license_date_release"]."<br>". $row["work_exp_inclusive_date_from"]."<br>". $row["work_exp_inclusive_date_to"]."<br>". $row["position_title"]."<br>". $row["department"]."<br>". $row["monthly_salary"]."<br>". $row["salary_grade"]."<br>".
				$row["status_of_appointment"]."<br>". $row["govt_service"]."<br>".$row["name_organization"]."<br>". $row["voluntary_work_inclusive_dates_from"]."<br>". $row["voluntary_work_inclusive_dates_to"]."<br>". $row["voluntary_number_of_hours"]."<br>". $row["voluntary_position"]."<br>".
				$row["title_seminar"]."<br>". $row["training_inclusive_dates_attendance_from"]."<br>". $row["training_inclusive_dates_attendance_to"]."<br>". $row["training_number_of_hours"]."<br>". $row["conducted"]."<br>". $row["special_skills"]."<br>". $row["non_academic_distinctions"]."<br>". $row["membership_in_assoc"];
		echo "</div>";
	echo "</div>";
	echo "</div>";
		}
	}

?> 

</body>
</html>