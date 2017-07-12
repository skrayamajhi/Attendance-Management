<html>
<head>
    <title></title>
    <?php
        require 'header.php';

    ?>
</head>
<body>

    <?php 
        require 'config.php';

    $data = mysqli_query($con,"SELECT * FROM course WHERE course_id='$_GET[id]'");

    $course=mysqli_fetch_array($data);

    if (isset($_POST['save'])) {
        # code...#
        $course_id = $_POST['cid'];
        $course_name = $_POST['cname'];
        $duration = $_POST['duration'];
        $course_type = $_POST['ctype'];

        $update="UPDATE `course` SET  course_name = '$course_name',duration = '$duration', course_type = '$course_type' WHERE course_id = '$course_id'";
        $result=mysqli_query($con,$update);
        if ($result ==1 ) {
            header('Location: http://localhost/Attendance-Management/ADMIN/course_details.php');
            exit();
        }

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
                                <i class="fa fa-table"></i> <a href="course_details.php"> Course Details</a> 
                            </li>
                            <li class="active">
                                <i class="fa fa-pencil"></i> Edit Course
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="panel panel-success">
                    <div class="panel-heading">Course Details</div>
                    <div class="panel-body">
                        
                        <form role="form" method="post">
                            <div class="form-group">
                                <label class="control-label" for="cid">Course ID</label>
                                <input type="text" class="form-control" id="cid"  name="cid" value='<?php echo  $course['course_id']?>' readonly>
                            </div> 
                            <div class="form-group">
                                <label class="control-label" for="cname">Course Name</label>
                                <input type="text" class="form-control" id="cname" placeholder="Enter Name" name="cname" value='<?php echo  $course['course_name']?>' required="">
                            </div> 

                            <div class="form-group">
                                <label class="control-label" for="duration">Duration</label>
                                <input type="text" class="form-control" id="duration" placeholder="Enter Duration" name="duration" value='<?php echo  $course['duration']?>' required="">
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="ctype">Course Type</label>
                                <input type="text" class="form-control" id="ctype" placeholder="Enter Course Type" name="ctype" value='<?php echo  $course['course_type']?>' required="">
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