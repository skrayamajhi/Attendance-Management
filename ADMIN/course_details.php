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
        $con = mysqli_connect("localhost","root","","ams");
        // Check connection
        if (mysqli_connect_errno())
        {
            die("Failed to connect to MySQL: " . mysqli_connect_error());
        }

        if (!$result = mysqli_query($con,"SELECT * FROM course"))
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
                            Course Details
                        </h3>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="dashboard.php"> Dashboard</a> 
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Course Details
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
                        <table class="table table-hover table-striped table-bordered" style="text-align: center;">
                            <thead>
                                <tr style="text-align: center; font-weight: bold;">
                                    <td>Course ID</td>
                                    <td>Course Name</td>
                                    <td>Duration</td>
                                    <td>Type</td>
                                    <td>Actions</td>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                        while ($course=mysqli_fetch_array($result))
                                        { 
                                    ?>
                                        <tr>
                                        <td><?php echo $course['course_id']; ?></td>
                                        <td><?php echo $course['course_name']; ?></td>
                                        <td><?php echo $course['duration']; ?></td>
                                        <td><?php echo $course['course_type']; ?></td>
                                        <td> <a href=edit_course.php?> <button class=btn>Edit</button></a> <a href=delete_course.php?id=<?php echo $course['course_id']; ?>> <button class=btn>Delete</button></a></td>
                                        </tr>
                                <?php
                                        }
                                        mysqli_close($con);
                                ?>
                            </tbody>
                        </table>
                    	</div>

                    <div>
                    	<a href="add_course.php"><button type="button" class="btn btn-success">Add Course</button></a>
                    </div>

        		</div>                		
                	

            	
            <!-- /.container-fluid -->

        </div>
    </div>
</body>
</html>