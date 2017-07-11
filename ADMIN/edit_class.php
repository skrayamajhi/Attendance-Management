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

            if (isset($_POST['update'])){
            # code...#
            $insert = "INSERT INTO `class`(`class_id`, `class_name`, `location`, `capacity`) VALUES ('".$_POST["clsid"]."','".$_POST["cname"]."','".$_POST["location"]."','".$_POST["capacity"]."')";

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
                                <i class="fa fa-table"></i>  <a href="class_details.php"> Class Details</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-pencil"></i> Edit Class 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="panel panel-success">
                    <div class="panel-heading">Class Details</div>
                    <div class="panel-body">
                        
                        <form role="form" method="post">

                            <div class="form-group">
                                <label class="control-label" for="id">Class ID</label>
                                <input type="text" class="form-control" id="id" placeholder="ID" name="clsid" required="">
                            </div> 
                            <div class="form-group">
                                <label class="control-label" for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name" name="cname" required="">
                            </div> 

                            <div class="form-group">
                                <label class="control-label" for="location">Location</label>
                                <input type="text" class="form-control" id="location" placeholder="Location" name="location" required="">
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="capacity">Capacity</label>
                                <input type="text" class="form-control" id="capacity" placeholder="Capacity" name="capacity" required="">
                            </div> 

                            <button type="submit" name="update" class="btn btn-success">Update</button>
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