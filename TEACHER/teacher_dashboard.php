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

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">
                        Dashboard
                    </h3>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Dashboard
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <!-- Search Bar -->
            <div class="row">
                    <div class="col-sm-6 col-sm-offset-6">
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
            <!-- /.Search Bar -->

            <!-- Student Table -->

            <?php  
            mysql_connect('localhost', 'root', '');

            mysql_select_db('ams');

            $sql = "select * FROM student";
            $records = mysql_query($sql);
            ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">Student Details</div>
                        <div class="panel-body">
                            <div class="table">
                                    <div class="table-responsive">
                                    <table class="table table-hover table-bordered table-striped" style="text-align: center;" >
                                        <thead>
                                            <tr style="text-align: center; font-weight: bold;">
                                                <td>Student ID</td>
                                                <td>Name</td>
                                                <td>Level</td>
                                                <td>Stream</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                while ($student=mysql_fetch_assoc($records)) {
                                                    # code...
                                                    echo "<tr>";
                                                    echo "<td>$student[student_id]</td>";
                                                    echo "<td>$student[first_name] $student[last_name]</td>";
                                                    echo "<td>$student[level]</td>";
                                                    echo "<td>$student[stream]</td>";
                                                    echo "</tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <!-- Student Table -->

            <!-- Class Table -->
            <?php  
            $con = mysql_connect('localhost', 'root', '');
            if (!$con) {
                # code...
                die("Cant Connect" .mysql_error());
            }
            mysql_select_db('ams');

            $sql = "select * FROM class";
            $records = mysql_query($sql);

            ?>

            <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">Class Details</div>
                            <div class="panel-body">
                               <div class="table">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped table-bordered" style="text-align: center;">
                                            <thead>
                                                <tr style="text-align: center; font-weight: bold;">
                                                    <td>Class ID</td>
                                                    <td>Name</td>
                                                    <td>Location</td>
                                                    <td>Capacity</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                    while ($class=mysql_fetch_assoc($records)) {
                                                        # code...
                                                        echo "<tr>";
                                                        echo "<td>$class[class_id]</td>";
                                                        echo "<td>$class[class_name]</td>";
                                                        echo "<td>$class[location]</td>";
                                                        echo "<td>$class[capacity]</td>";
                                                        echo "</tr>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
            </div>
            <!-- /Class Table -->
            
        	<!-- Teacher Table -->
            <?php  
            $con = mysql_connect('localhost', 'root', '');
            if (!$con) {
                # code...
                die("Cant Connect" .mysql_error());
            }
            mysql_select_db('ams');

            $sql = "select * FROM teacher";
            $records = mysql_query($sql);

            ?>

            <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">Teacher Details</div>
                            <div class="panel-body">
                               <div class="table">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped table-bordered" style="text-align: center;">
                                            <thead>
                                                <tr style="text-align: center; font-weight: bold;">
                                                    <td>Teacher ID</td>
                                                    <td>Name</td>
                                                    <td>Gender</td>
                                                    <td>E-mail</td>
                                                    <td>Contact</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                    while ($teacher=mysql_fetch_assoc($records)) {
                                                        # code...
                                                        echo "<tr>";
                                                        echo "<td>$teacher[teacher_id]</td>";
                                                        echo "<td>$teacher[first_name] $teacher[last_name]</td>";
                                                        echo "<td>$teacher[gender]</td>";
                                                        echo "<td>$teacher[email]</td>";
                                                        echo "<td>$teacher[contact]</td>";
                                                        echo "</tr>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
            </div>
            <!-- /Teacher Table -->

            <!-- Teacher Table -->
            <?php  
            $con = mysql_connect('localhost', 'root', '');
            if (!$con) {
                # code...
                die("Cant Connect" .mysql_error());
            }
            mysql_select_db('ams');

            $sql = "select * FROM course";
            $records = mysql_query($sql);

            ?>

            <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success">
                            <div class="panel-heading">Course Details</div>
                            <div class="panel-body">
                               <div class="table">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped table-bordered" style="text-align: center;">
                                            <thead>
                                                <tr style="text-align: center; font-weight: bold;">
                                                    <td>Course ID</td>
                                                    <td>Name</td>
                                                    <td>Duration</td>
                                                    <td>Type</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                    while ($course=mysql_fetch_assoc($records)) {
                                                        # code...
                                                        echo "<tr>";
                                                        echo "<td>$course[course_id]</td>";
                                                        echo "<td>$course[course_name]</td>";
                                                        echo "<td>$course[duration]</td>";
                                                        echo "<td>$course[course_type]</td>";
                                                        echo "</tr>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
            </div>
            <!-- /Course Table -->

       </div>
        <!-- /.container-fluid -->
    </div>
</body>
</html>