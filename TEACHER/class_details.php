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
            $con = mysql_connect('localhost', 'root', '');
            if (!$con) {
                # code...
                die("Cant Connect" .mysql_error());
            }
            mysql_select_db('ams');

            $sql = "select * FROM class";
            $records = mysql_query($sql);

        ?>
	        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            Class Details
                        </h3>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="dashboard.php"> Dashboard</a> 
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Class Details
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
                                    <td>Class ID</td>
                                    <td>Name</td>
                                    <td>Location</td>
                                    <td>Capacity</td>
                                    <td>Actions</td>
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
                                        echo "<td> <a href=view_class.php? ><button class=btn>Details</button></a> </td>";
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