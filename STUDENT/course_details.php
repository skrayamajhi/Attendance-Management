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
            mysql_connect('localhost', 'root', '');

            mysql_select_db('ams');

            $sql = "select * FROM course";
            $records = mysql_query($sql);
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
                	

            	
            <!-- /.container-fluid -->

        </div>
    </div>
</body>
</html>