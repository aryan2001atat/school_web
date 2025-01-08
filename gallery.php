<?php
    session_start();
    $page_title = "Gallery";
    
    include 'includes/school_database.php';

    
    
?>
<!-- Include Header -->
<?php
    include_once('includes/school_header.php');
?>

    <div class="container-fluid">
        <ul class="breadcrumb">
		    <li><a href="index.php">Home</a></li>
    		<li class="active" style="color:#666;">&nbsp;/&nbsp;Gallery</li>
	    </ul>
    </div>
    <div class="container mt-5 mb-5 gallery">
            <h1 class="galhead text-justify">Our&nbsp;<span>Gallery</span></h1>
            <div class="row mt-5">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/class1.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/class1.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/class2.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/class2.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/classroom.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/classroom.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/classrooms.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/classrooms.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/smartclass.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/smartclass.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/indian trad dance.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/indian trad dance.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/CompLab.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/CompLab.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/ATL.png" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/ATL.png" alt="error"></a>
                </div>
            </div>
            <!-- Second row -->
            <div class="row mt-5">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/lab.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/lab.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/library1.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/library1.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/NCC.png" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/NCC.png" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/pen.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/pen.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/s2.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/s2.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/s3.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/s3.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/s1.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/s1.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/scout.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/scout.jpg" alt="error"></a>
                </div>
            </div>
            <!-- Third Row -->
            <div class="row mt-5">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/class1.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/class1.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/class2.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/class2.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/classroom.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/classroom.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/classrooms.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/classrooms.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/culture.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/culture.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/indian trad dance.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/indian trad dance.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/CompLab.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/CompLab.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/ATL.png" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/ATL.png" alt="error"></a>
                </div>
            </div>
            <!-- Fourth Row -->
            <div class="row mt-5">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/lab.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/lab.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/library1.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/library1.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/NCC.png" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/NCC.png" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/pen.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/pen.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/s3.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/s3.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/s2.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/s2.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/s1.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/s1.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/scout.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2"
                            src="assets/img/scout.jpg" alt="error"></a>
                </div>
            </div>
        </div>








<!-- Include Footer -->
<?php
    include_once('includes/school_footer.php');
?>