
<?php error_reporting(0);?>

<?php 
session_start();

  include("connection.php");
  include("functions.php");
  
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Check if the index exists before assigning to variables
    $Roll_Number = isset($_POST['Roll_Number']) ? $_POST['Roll_Number'] : '';
    $Enrollment_No = isset($_POST['Enrollment_No']) ? $_POST['Enrollment_No'] : '';
    $Name_of_Student = isset($_POST['Name_of_Student']) ? $_POST['Name_of_Student'] : '';
    $Address = isset($_POST['Address']) ? $_POST['Address'] : '';
    $Contact_No = isset($_POST['Contact_No']) ? $_POST['Contact_No'] : '';
    $Email_Address = isset($_POST['Email_Address']) ? $_POST['Email_Address'] : '';
    $Percentage = isset($_POST['Percentage']) ? $_POST['Percentage'] : '';
    $Status = isset($_POST['Status']) ? $_POST['Status'] : '';
    $Department = isset($_POST['Department']) ? $_POST['Department'] : '';
    $Division = isset($_POST['Division']) ? $_POST['Division'] : '';
    $Name_of_College_Company = isset($_POST['Name_of_College_Company']) ? $_POST['Name_of_College_Company'] : '';
    $Region_B_Sc_IT_Job = isset($_POST['Region_B_Sc_IT_Job']) ? $_POST['Region_B_Sc_IT_Job'] : '';
}

if (!empty($Roll_Number) && !empty($Enrollment_No) && !empty($Name_of_Student) && !empty($Address) && !empty($Contact_No) && !empty($Email_Address) && !empty($Percentage) && !empty($Status) && !empty($Department) && !empty($Division) && !empty($Name_of_College_Company) && !empty($Region_B_Sc_IT_Job) && !is_numeric($Status)) {
  // Save to database
  $query = "INSERT INTO alumni_database (Roll_Number, Enrollment_No, Name_of_Student, Address, Contact_No, Email_Address, Percentage, Status, Department, Division, Name_of_College_Company, Region_B_Sc_IT_Job) VALUES ('$Roll_Number', '$Enrollment_No', '$Name_of_Student', '$Address', '$Contact_No', '$Email_Address', '$Percentage', '$Status', '$Department', '$Division', '$Name_of_College_Company', '$Region_B_Sc_IT_Job')";
  
  mysqli_query($con, $query);
  
  header("Location: addAlumni.php");
  die;
} else {
  echo "";
}
?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>ACPCE </title>
	
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="images/vp_logo.png" style="width: 110px; height: 40px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Alumni.php">Alumnis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Feedback.php">Feedback</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

	<center><h1>Add Alumni</h1></center>
	<br></br>
  <form method="post">
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Roll_Number:</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
  <label for="formGroupExampleInput2" class="form-label">Enrollment_No:</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
  <label for="formGroupExampleInput" class="form-label">Name_of_Student:</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
  <label for="formGroupExampleInput2" class="form-label">Address</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
  <label for="formGroupExampleInput2" class="form-label">Contact_No</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
  <label for="formGroupExampleInput2" class="form-label">Email_Address</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
  <label for="formGroupExampleInput2" class="form-label">Percentage</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
  <label for="formGroupExampleInput2" class="form-label">Status</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
  <label for="formGroupExampleInput2" class="form-label">Department</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
  <label for="formGroupExampleInput2" class="form-label">Division</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
  <label for="formGroupExampleInput2" class="form-label">Name_of_College_Company</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
  <label for="formGroupExampleInput2" class="form-label">Region_B_Sc_IT_Job</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
  <input id="button" type="submit" value="Add_Alumnni">
</div>
</form>
<br><br>
</body>
</html>


