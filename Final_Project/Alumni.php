<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACPCE | Alumni Directory</title>
    <link rel = "icon" href = 
"images/vp_logo.jfif" 
        type = "image/x-icon">
        <script src="javas/javascript.js"></script>
    <link rel="stylesheet" href="css/style2.css">
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Alumni</title>
</head>
<body>
<nav>
        <div class="title">
            <h3>Alumni Directory</h3>
        </div>
        <div class="list">
       <UL class="nav-links" >
            <li><a class="middle" href="index.php">Home</a></li>
            <li><a class="middle" href="Alumni.php">Alumni</a></li>
            <li> <a class="middle" href="aboutus.php"> About Us</a></li>
            <li> <a class="middle" href="logout.php"> Logout</a></li>
        </UL>
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
    
</div>
</nav>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th>Roll_Number</th>
                                <th>Enrollment_No</th>
                                <th>Name_of_student</th>
                                <th>Address</th>
                                <th>Contact_No</th>
                                <th>Email_Address</th>
                                <th>Percentage</th>
                                <th>Status</th>
                                <th>Department</th>
                                <th>Division</th>
                                <th>Name_of_College_Company</th>
                                <th>Region_B_Sc_IT_Job</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","alumini");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM alumni_database WHERE CONCAT(Roll_Number,Enrollment_No ,Name_of_Student,Address,Contact_No ,Email_Address, Percentage, Status, Department ,Division, Name_of_College_Company, Region_B_Sc_IT_Job) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['Roll_Number'];?></td>
                                                    <td><?= $items['Enrollment_No'];?></td>
                                                    <td><?= $items['Name_of_Student'];?></td>
                                                    <td><?= $items['Address'];?></td>

                                                    <td><?= $items['Contact_No'];?></td>
                                                    <td><?= $items['Email_Address'];?></td>
                                                    <td><?= $items['Percentage'];?></td>
                                                    <td><?= $items['Status'];?></td>

                                                    <td><?= $items['Department'];?></td>
                                                    <td><?= $items['Division'];?></td>
                                                    <td><?= $items['Name_of_College_Company'];?></td>
                                                    <td><?= $items['Region_B_Sc_IT_Job'];?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>
</html>
