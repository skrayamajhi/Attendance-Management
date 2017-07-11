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
                            Attendance 
                        </h3>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="dashboard.php"> Dashboard</a> 
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-list-alt"></i> Attendance 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                    <div class="col-lg-3">
                            <div >
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

                    <div class="col-lg-2">
                         <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Choose Stream
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Computing</a></li>
                            <li><a href="#">Networking</a></li>
                            <li><a href="#">Multimedia</a></li>
                            <li><a href="#">BBA</a></li>
                          </ul>
                        </div> 
                    </div>
                    
                    <div class="col-lg-2">
                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Choose Level
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li><a href="#">First Year</a></li>
                            <li><a href="#">Second Year</a></li>
                            <li><a href="#">tdird Year</a></li>
                            <li><a href="#">Year Zero</a></li>
                          </ul>
                        </div> 
                    </div>
                </div>
                <br>
               
                <div class="table">
                            <div class="table-responsive">
                            <table class="table table-hover table-bordered table-striped" style="text-align: center;">
                                <thead>
                                    <tr style="font-weight: bold; text-align: center;">
                                        <td>Student</td>
                                        <td>Student Name</td>
                                        <td>Status</td>
                                        <td>Remarks</td>
                                        <td>Actions</td>
                                    </tr>
                                </tdead>


                                <tbody>
                                    <tr>
                                       <td>14046988</td> 
                                       <td>Sabal K. Rayamajhi</td> 
                                       <td>P</td>   
                                       <td>Good</td>   
                                           <td>
                                            <a href=""><i class="glyphicon glyphicon-search"></i></a>
                                            <a href="edit_student.php"><span class="glyphicon glyphicon-pencil"></span></a>
                                            <a href=""><span class="glyphicon glyphicon-remove"></span></a>
                                       </td>  
                                    </tr><tr>
                                       <td>14046988</td> 
                                       <td>Sabal K. Rayamajhi</td> 
                                       <td>P</td>   
                                       <td>Good</td>   
                                           <td>
                                            <a href=""><span class="glyphicon glyphicon-search"></span></a>
                                            <a href="edit_student.php"><span class="glyphicon glyphicon-pencil"></span></a>
                                            <a href=""><span class="glyphicon glyphicon-remove"></span></a>
                                       </td>  
                                    </tr><tr>
                                       <td>14046988</td> 
                                       <td>Sabal K. Rayamajhi</td> 
                                       <td>P</td>   
                                       <td>Good</td>   
                                        <td>
                                            <a href=""><span class="glyphicon glyphicon-search"></span></a>
                                            <a href="edit_student.php"><span class="glyphicon glyphicon-pencil"></span></a>
                                            <a href=""><span class="glyphicon glyphicon-remove"></span></a>
                                       </td>  
                                    </tr>
                                </tbody>
                            </table>
                            </div>

                      </div> 
            <!-- /.container-fluid -->

        </div>
    </div>
</body>
</html>