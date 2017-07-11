<html>
<head>
    <title></title>
    <?php
        require 'header.php';

    ?>
</head>
<body>
    <?php
        require 'nav.php';
    ?>
    <?php
            define('SERVER', 'localhost');
            define('DBUN', 'root');
            define('DBPW', '');
            define('DBNAME', 'ams');

            $con= mysqli_connect(SERVER,DBUN,DBPW,DBNAME);

                if (isset($_POST['save'])) {
                    # code...#
                    $insert = "INSERT INTO `student`(`student_id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `level`, `stream`, `email`, `contact`, `address`, `password`) VALUES ('".$_POST["stdid"]."','".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["dob"]."','".$_POST["gender"]."','".$_POST["level"]."','".$_POST["stream"]."','".$_POST["email"]."','".$_POST["contact"]."','".$_POST["address"]."', '".$_POST["pswrd"]."')";

                    $result= mysqli_query($con,$insert);   
                }
                
        ?>
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Add Student
                        </h3>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="dashboard.php"> Dashboard</a> 
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> <a href="student_details.php">Student Details</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-plus-square"></i> Add Student
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="panel panel-success">
                    <div class="panel-heading">Student Details</div>
                    <div class="panel-body">
                        
                        <form role="form" method="post">
                            <div class="form-group">
                                <label class="control-label" for="id">Student ID</label>
                                <input type="text" class="form-control" id="id" placeholder=" Enter ID" name="stdid" required="">
                            </div> 
                            <div class="form-group">
                                <label class="control-label" for="fname">First Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" required="">
                            </div> 

                            <div class="form-group">
                                <label class="control-label" for="lname">Last Name</label>
                                <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" required="">
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="dob">Date of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" required="">
                            </div> 

                            <div class="form-group">
                                <label class="control-label" for="gender">Gender</label>
                                <input type="text" class="form-control" id="gender" placeholder="Enter Gender" name="gender" required="">
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="level">Level</label>
                                <input type="text" class="form-control" id="level" placeholder="Enter Level" name="level" required="">
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="stream">Stream</label>
                                <input type="text" class="form-control" id="stream" placeholder="Enter Stream" name="stream" required="">
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="example@email.com" name="email" required="">
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="contact">Contact</label>
                                <input type="number" class="form-control" id="contact" placeholder="Enter number" name="contact" required="">
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="adrs">Address</label>
                                <input type="text" class="form-control" id="adrs" placeholder="Enter Address" name="address" required="">
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="pwsrd">Password</label>
                                <input type="password" class="form-control" id="pswrd" placeholder="Enter Password" name="pswrd" required="">
                            </div>

                            <button type="submit" class="btn btn-success" name="save">Submit</button>
                            <button type="cancel" class="btn btn-danger">Cancel</button>
                        </form>

                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
    </div>
</body>
</html>