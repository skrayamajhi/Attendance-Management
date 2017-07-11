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

            require 'config.php';

            $insert= mysqli_connect(SERVER,DBUN,DBPW,DBNAME);

                if (isset($_POST['save'])) {
                    # code...#
                    $insert = "INSERT INTO `teacher`(`teacher_id`, `first_name`, `last_name`, `gender`, `password`, `contact`, `e-mail`, `address`, `date_of_birth`) VALUES ('".$_POST["tchid"]."','".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["gndr"]."','".$_POST["pswrd"]."','".$_POST["cntct"]."','".$_POST["email"]."','".$_POST["adrs"]."','".$_POST["dob"]."')";

                    $result= mysqli_query($con,$insert);
                }
        ?>
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Edit Details
                        </h3>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="dashboard.php"> Dashboard</a> 
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> <a href="teacher_details.php"> Teacher Details</a> 
                            </li>
                            <li class="active">
                                <i class="fa fa-pencil"></i> Edit Teacher
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="panel panel-success">
                            <div class="panel-heading">Teacher Details</div>
                            <div class="panel-body">
                                
                                <form role="form" method="post">

                                    <div class="form-group">
                                        <label class="control-label" for="tchid">Teacher ID</label>
                                        <input type="text" class="form-control" id="id" placeholder="ID" name="tchid" required="">
                                    </div> 
                                    <div class="form-group">
                                        <label class="control-label" for="fname">First Name</label>
                                        <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" required="">
                                    </div> 

                                    <div class="form-group">
                                        <label class="control-label" for="lname">Last Name</label>
                                        <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" required="">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="gender">Gender</label>
                                        <input type="text" class="form-control" id="gender" placeholder="Gender" name="gndr" required=""> 
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="pswrd" required="">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="contact">Contact</label>
                                        <input type="number" class="form-control" id="contact" placeholder="Enter Number" name="cntct" required="">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="email">E-mail</label>
                                        <input type="email" class="form-control" id="email" placeholder="example@email.com" name="email" required="">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="address">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="Enter Address" name="adrs" required="">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="dob">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" name="dob" required="">
                                    </div>

                                    <button type="submit" class="btn btn-success" name="save">Update</button>
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