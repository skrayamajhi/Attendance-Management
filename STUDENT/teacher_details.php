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

            $sql = "select * FROM teacher";
            $records = mysql_query($sql);
        ?>

           <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Teacher Details
                        </h3>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="dashboard.php"> Dashboard</a> 
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Teacher Details
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
                            <table class="table table-hover table-bordered table-striped" style="text-align: center;">
                                <thead>
                                    <tr style="text-align: center; font-weight: bold;">
                                        <td>Teacher ID</td>
                                        <td>Name</td>
                                        <td>Gender</td>
                                        <td>E-mail</td>
                                        <td>Address</td>
                                        <td>Contact</td>
                                        <td>Date of Birth</td>
                                        <td>Actions</td>
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
                                            echo "<td>$teacher[address]</td>";
                                            echo "<td>$teacher[contact]</td>";
                                            echo "<td>$teacher[date_of_birth]</td>";
                                            echo "<td> <a href=view_teacher.php? ><button class=btn>Details</button></a> </td>";
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