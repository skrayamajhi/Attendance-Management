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

        if (isset($_POST['save'])) {
        # code...#
        $insert = "INSERT INTO `course`(`course_id`, `course_name`, `duration`, `course_type`) VALUES ('".$_POST["cid"]."','".$_POST["cname"]."','".$_POST["duration"]."','".$_POST["ctype"]."')";

        $result= mysqli_query($con,$insert);
    }

    ?>
            <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Add Course
                        </h3>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="dashboard.php"> Dashboard</a> 
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> <a href="course_details.php"> Course Details</a> 
                            </li>
                            <li class="active">
                                <i class="fa fa-plus-square"></i> Add Course
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
                                <input type="text" class="form-control" id="cid" placeholder=" Enter ID" name="cid" required="">
                            </div> 
                            <div class="form-group">
                                <label class="control-label" for="cname">Course Name</label>
                                <input type="text" class="form-control" id="cname" placeholder="Enter Name" name="cname" required="">
                            </div> 

                            <div class="form-group">
                                <label class="control-label" for="duration">Duration</label>
                                <input type="text" class="form-control" id="duration" placeholder="Enter Duration" name="duration" required="">
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="ctype">Course Type</label>
                                <input type="text" class="form-control" id="ctype" placeholder="Enter Course Type" name="ctype" required="">
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