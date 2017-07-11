<?php  
	require 'nav.php';
	require 'header.php';
?>
	
<div id="page-wrapper">
	<div class="container-fluid">

		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">
                    Delete Data
                </h3>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> <a href="dashboard.php"> Dashboard</a> 
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i> <a href="teacher_details.php">Teacher Details</a>
                    </li>
                </ol>
            </div>
        </div>
        <!-- /row -->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-success">
					<div class="panel-heading">Message!!!</div>
					<div class="panel-body">
						<?php
							// Your database info
							$db_host = 'localhost';
							$db_user = 'root';
							$db_pass = '';
							$db_name = 'ams';

							if (!isset($_GET['id']))
							{
							    echo 'No ID was given...';
							    exit;
							}

							$con = new mysqli($db_host, $db_user, $db_pass, $db_name);
							if ($con->connect_error)
							{
							    die('Connect Error (' . $con->connect_errno . ') ' . $con->connect_error);
							}

							$sql = "DELETE FROM teacher WHERE teacher_id = ?";
							if (!$result = $con->prepare($sql))
							{
							    die('Query failed: (' . $con->errno . ') ' . $con->error);
							}

							if (!$result->bind_param('i', $_GET['id']))
							{
							    die('Binding parameters failed: (' . $result->errno . ') ' . $result->error);
							}

							if (!$result->execute())
							{
							    die('Execute failed: (' . $result->errno . ') ' . $result->error);
							}

							if ($result->affected_rows > 0)
							{
							    echo "<h4>The data was successfully deleted.</h4>";
							}
							else
							{
							    echo "<h4>Couldn't delete the data.</h4>";
							}
							$result->close();
							$con->close();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>