    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Attendance Management System</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                         <li>
                            <a href="/ams/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="attendance.php"><i class="glyphicon glyphicon-calendar"></i> Attendance</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#student"><i class=" fa fa-graduation-cap"></i> Student</a>
                        <ul id="student" class="collapse">
                            <li>
                                <a href="add_student.php"><i class="fa fa-plus"></i> Add Student</a>
                            </li>
                            <li>
                                <a href="student_details.php"><i class="glyphicon glyphicon-list-alt"> </i> Student Details</a>
                            </li>
                        </ul>

                        <a href="javascript:;" data-toggle="collapse" data-target="#classes"><i class="fa fa-university"></i> Classes</a>
                        <ul id="classes" class="collapse">
                            <li>
                                <a href="add_class.php"><i class="fa fa-plus"></i> Add Class</a>
                            </li>
                            <li>
                                <a href="class_details.php"><i class="glyphicon glyphicon-list-alt"> </i> Class Details</a>
                            </li >
                        </ul>

                        <a href="javascript:;" data-toggle="collapse" data-target="#teacher"><i class="fa fa-user"></i> Teacher</a>
                        <ul id="teacher" class="collapse">
                            <li>
                                <a href="add_teacher.php"><i class="fa fa-plus"></i> Add Teacher</a>
                            </li>
                            <li>
                                <a href="teacher_details.php"><i class="glyphicon glyphicon-list-alt"></i> Teacher Details</a>
                            </li>
                        </ul>

                        <a href="javascript:;" data-toggle="collapse" data-target="#courses"><i class="fa fa-book"></i> Course</a>
                        <ul id="courses" class="collapse">
                            <li>
                                <a href="add_course.php"><i class="fa fa-plus"></i> Add Course</a>
                            </li>
                            <li>
                                <a href="course_details.php"><i class="glyphicon glyphicon-list-alt"></i> Course Details</a>
                            </li>
                        </ul>

                        
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse --> 
        </nav>
