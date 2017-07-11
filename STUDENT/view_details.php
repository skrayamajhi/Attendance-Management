<html>
<head>
    <title></title>
    <?php
        require 'header.php';
    ?>
</head>
<body>
    <?php
        $con = mysqli_connect("localhost","root","","ams");
        // Check connection
        if (mysqli_connect_errno())
        {
            die("Failed to connect to MySQL: " . mysqli_connect_error());
        }

        if (!$result = mysqli_query($con,"SELECT * FROM student"))
        {
            die("Error: " . mysqli_error($con));
        }
    ?>

            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Student Details
                        </h3>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="dashboard.php"> Dashboard</a> 
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> <a href="student_details.php">Student Details</a>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-sm-6">
                        <div id="imaginary_container"> 
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control"  placeholder="Search" >
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>  
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                
                <div class="table">
                            <div class="table-responsive">
                            <table class="table table-hover table-bordered table-striped" style="text-align: center;" >
                                <thead>
                                    <tr style="text-align: center; font-weight: bold;">
                                        <td>Student ID</td>
                                        <td>First Name</td>
                                        <td>Last Name</td>
                                        <td>Date of Birth</td>
                                        <td>Gender</td>
                                        <td>Level</td>
                                        <td>Stream</td>
                                        <td>E-mail</td>
                                        <td>Contact</td>
                                        <td>Address</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        while ($student=mysqli_fetch_array($result))
                                        { 
                                    ?>
                                         <tr>
                                         <td><?php echo $student['student_id']; ?></td>
                                         <td><?php echo $student['first_name']; ?></td>
                                         <td><?php echo $student['last_name']; ?></td>
                                         <td><?php echo $student['date_of_birth']; ?></td>
                                         <td><?php echo $student['gender']; ?></td>
                                         <td><?php echo $student['level']; ?></td>
                                         <td><?php echo $student['stream']; ?></td>
                                         <td><?php echo $student['email']; ?></td>
                                         <td><?php echo $student['contact']; ?></td>
                                         <td><?php echo $student['address']; ?></td>
                                         </tr>
                                    <?php
                                        }
                                        mysqli_close($con);
                                    ?>
                                    
                                </tbody>
                            </table>
                            </div>
                </div> 
        </div>
    </div>
</body>
</html>